<?php

namespace sprint2\AuthandlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\FormError;
use sprint2\RealEstate\AdminBundle\Models\Document;

class DefaultController extends Controller
{
    
    public function indexloginAction(){
    	return $this->render('sprint2AuthandlogBundle:Default:connection.html.twig');
    }

     public function loginAction()
    {
        
          $em = $this->getDoctrine()->getManager();
          $session = $this->getRequest()->getSession();
          $hasCompte = $session->has('compte');
          
          //**************Si déja connecté (possede une session avec compte)
          if ($hasCompte){
            //var_dump('Vous etes connecté :'.$session->get('compte')->getNom());
              //$compteUser = $session->get('compte');
              //die("vous etes deja connecté");
              //return $this->render('vue d'acceuil ');
             //return $this->render('realEstateBundle   :Default:offreCard.html.twig');
             //à return $this->redirectToRoute('real_estate_homepage', array(), 301);
              return $this->redirect('http://127.0.0.1:8000');
          }

           //***************Si formulaire request 
          $request = $this->get('request_stack')->getCurrentRequest();
          if ($request->getMethod() == "POST") {
            $login=$request->get('mail');
            $password=$request->get('password');
             
            //Remplissage des Comptes 
            $queryR = $em->createQuery('SELECT u FROM sprint2AuthandlogBundle:Utilisateur u WHERE u.mail =?1 and u.password=?2');
            $queryR->setParameter(1, $login);
            $queryR->setParameter(2, $password);
            $compteUser = $queryR->getOneOrNullResult();
           

           //Affectation compte à la session
            //il est gerant
            if ( $compteUser->getRole() ==1)
            {
                $session->set('compte', $compteUser);
                $session->set('type', 'gerant');
               // die("je suis un gerant !!!");
                //return $this->redirectToRoute('homepage', array(), 301);
                //return $this->render('PerfectJobFreelancerBundle:MisEnPage:slideAccueil.html.twig');

            }

            // Il est client
            else if  ( $compteUser->getRole() ==2) {
                 $session->set('compte', $compteUser);
                 $session->set('type', 'client');
                 //return $this->redirectToRoute('real_estate_offre', array(), 301);
                 die("je suis un client !!!!!");
                 //return $this->render('PerfectJobFreelancerBundle:MisEnPage:slideAccueil.html.twig');
          
            }else//INCORRECT
                
                var_dump('compte inexistant');
            }

               //ELSE Pas de compte et pas de request formulaire
                return $this->render('sprint2AuthandlogBundle:Default:connection.html.twig');

    }

    public function logoutAction()
    {
         // page d index a ajouter 
    	 if($this->getRequest()->getSession()->has('compte')){
            
            $this->getRequest()->getSession()->clear();
        }
        return $this->redirect('http://127.0.0.1:8000');

    }

    public function registerAction()
    {

        if($this->getRequest()->getSession()->has('compte')){
            return $this->redirect('http://127.0.0.1:8000');
        }
        
        $em = $this->getDoctrine()->getManager();

        $request = $this->get('request_stack')->getCurrentRequest();
          
        /*if ($request->getMethod() == "POST") {
            $mailx=$request->get('mail');
            $pwdx=$request->get('pwd');
            $nomx=$request->get('nom');
            $prenomx=$request->get('prenom');
            $typecomptex=$request->get('typecompte');
            $statmatrix=$request->get('statmatri');
            $nummobilex=$request->get('nummobile');
            $nummobilex=$request->get('numfix');
            

        }
    	*/
        
        $utilisateurf=new \sprint2\RealEstate\AdminBundle\Entity\Utilisateur();
        $form=$this->createForm(new \sprint2\RealEstate\AdminBundle\Form\AjouCForm(),$utilisateurf);#container->get("form.factory")entre this et create#}
        $Request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($Request);
        if($form->isValid())
        {
            
            try {
                $cvbnnnn = $this->upload($utilisateurf->getImage());
                $utilisateurf->setPassword(md5($utilisateurf->getPassword()));
                $utilisateurf->setNumfix(NULL);
                $utilisateurf->setNummobile(NULL);
                $utilisateurf->setRole("2");
                $utilisateurf->setUrlp($cvbnnnn);

                $em = $this->getDoctrine()->getManager();
                $em->persist($utilisateurf);
                $em->flush();
            } catch(\Exception $e) {
                
                $findme   = "'mail'";
                $pos = strpos($e->getMessage(), $findme);
                if( $pos !== false )
                {
                    $form->get('mail')->addError(new FormError("L'adresse e-mail existe déjà"));                    
                    return $this->render('sprint2RealEstateAdminBundle:Pages:client.html.twig',
                        array('utilisateur'=>$utilisateur, 'form'=>$form->createView(), 'image'=>$Image));              
                }
            }           
        }
        return $this->render('sprint2AuthandlogBundle:Default:registration.html.twig',array( 'form'=>$form->createView()));
    }

     public function otherAction()
    {
    	die("other !");
    }


     public function upload($image) {
  
            $status = 'success';
            $uploadedURL='';
            $message="";
            if (($image instanceof UploadedFile) && ($image->getError() == '0')) {
                if (($image->getSize() < 100000 )) {
                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                    
                      //Start Uploading File
                      $name =$this->str_random();
                      $document = new Document();
                      $document->setFile($image, $file_type, $name);
                      $document->setSubDirectory('image');
                      $document->processFile();
                      return "http://localhost/image/".$name.".".$file_type;

                    }
                    else {                      
                      return "http://localhost/image/null".".png";                       
                    }
                }
                 else {  }
                 
            }  else {
                
            }
            
        }  

        function str_random($length = 16){
       $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

       return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
   }
}
