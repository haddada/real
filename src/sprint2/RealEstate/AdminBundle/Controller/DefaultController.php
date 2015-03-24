<?php

namespace sprint2\RealEstate\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sprint2\RealEstate\AdminBundle\Entity\Utilisateur;
use sprint2\RealEstate\AdminBundle\Entity\Offre;
use sprint2\RealEstate\AdminBundle\form\AjouCForm;
class DefaultController extends Controller
{
    public function indexAction()
    {
        $utilisateur_last_6_gerants= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>1));
        $utilisateur_last_6_client= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>2));
        $offre_last_6= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Offre')
        ->findAll();
        $Agance= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Agence')
        ->findAll();
        //array_slice($utilisateur,-6)
        //count($utilisateur);

        return $this->render('sprint2RealEstateAdminBundle:Default:index.html.twig',
                array('utilisateurg'=>array_slice($utilisateur_last_6_gerants,-8), 
                    'utilisateurc'=>array_slice($utilisateur_last_6_client,-8), 
                    'offre'=>array_slice($offre_last_6,-5),
                    'utilisateurgn'=>count($utilisateur_last_6_gerants),
                    'utilisateurcn'=>count($utilisateur_last_6_client),
                    'offren'=>count($offre_last_6),
                    'agancen'=>count($Agance),
                    'agance'=>array_slice($Agance,-5)));
    }
    
    public function mailAction()
    {
        return $this->render('sprint2RealEstateAdminBundle:Pages:mail.html.twig');

    }
    public function sentAction()
    {
        return $this->render('sprint2RealEstateAdminBundle:Pages:sentmail.html.twig');

    }

    public function clientsAction()
    {
        $request1 = $this->getRequest();
        if ($request1->getMethod()=="POST" ){ 
            
            $idx=$request1->get('id');
            $mailx=$request1->get('mail');
            $nomx=$request1->get('nom');
            $prenomx=$request1->get('prenom');
            $statmatrix=$request1->get('statmatri');
//            $passx=$request->get('pass');          
            $em1 = $this->getDoctrine()->getManager();
            if($request1->get('id')== NULL){
               $idx= "0";
            }else{
                $idx= $request1->get('id');
            }
            $utilisateurx = $em1->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($idx);
                       
            $utilisateurx->setMail($mailx);
            $utilisateurx->setNom($nomx);
            $utilisateurx->setPrenom($prenomx);
            $utilisateurx->setStatusMatrimonial($statmatrix);
//            $utilisateurx->setUrlp("http://localhost/image/null.png");
            $em2=$this->getDoctrine()->getManager();
            $em2->persist($utilisateurx);
            $em2->flush();     
//            return $this->render('sprint2RealEstateAdminBundle:Pages:agence.html.twig',
//                array('agance'=>$Agance, 'utilisateur'=>$utilisateur, 'adresse'=>$adresse ));
        }
        
        $utilisateur= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>2));
        
        $utilisateurf=new \sprint2\RealEstate\AdminBundle\Entity\Utilisateur();
        $form=$this->createForm(new \sprint2\RealEstate\AdminBundle\form\AjouCForm(),$utilisateurf);#container->get("form.factory")entre this et create#}
        $Request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($Request);//laison entre formulaire  et lentity en question et recuperer les données du requet
        if($form->isValid())
        {
            $utilisateurf->setPassword(md5($utilisateurf->getPassword()));
            $utilisateurf->setNumfix("default");
            $utilisateurf->setNummobile("default");
            $utilisateurf->setRole("2");
            $utilisateurf->setUrlp("http://localhost/image/null.png");
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateurf);
            $em->flush();

        }
        
        return $this->render('sprint2RealEstateAdminBundle:Pages:client.html.twig',
        	array('utilisateur'=>$utilisateur, 'form'=>$form->createView()));
    }
    
    public function gerantsAction()
    {
        $request1 = $this->getRequest();
        if ($request1->getMethod()=="POST" ){ 
            
            $idx=$request1->get('id');
            $mailx=$request1->get('mail');
            $nomx=$request1->get('nom');
            $prenomx=$request1->get('prenom');
            $statmatrix=$request1->get('statmatri');
            $fixex=$request1->get('numfix');
            $mobilx=$request1->get('nummob');
//            $passx=$request->get('pass');          
            $em1 = $this->getDoctrine()->getManager();
            if($request1->get('id')== NULL){
               $idx= "0";
            }else{
                $idx= $request1->get('id');
            }
            $utilisateurx = $em1->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($idx);
                       
            $utilisateurx->setMail($mailx);
            $utilisateurx->setNom($nomx);
            $utilisateurx->setPrenom($prenomx);
            $utilisateurx->setStatusMatrimonial($statmatrix);
            $utilisateurx->setNumfix($fixex); 
            $utilisateurx->setNummobile($mobilx); 
//            $utilisateurx->setUrlp("http://localhost/image/null.png");
            $em2=$this->getDoctrine()->getManager();
            $em2->persist($utilisateurx);
            $em2->flush();     
//            return $this->render('sprint2RealEstateAdminBundle:Pages:agence.html.twig',
//                array('agance'=>$Agance, 'utilisateur'=>$utilisateur, 'adresse'=>$adresse ));
        }
        
        $utilisateur= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>1));
        
        $utilisateurf=new \sprint2\RealEstate\AdminBundle\Entity\Utilisateur();
        $form=$this->createForm(new \sprint2\RealEstate\AdminBundle\form\AjouGForm(),$utilisateurf);#container->get("form.factory")entre this et create#}
        $Request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($Request);//laison entre formulaire  et lentity en question et recuperer les données du requet
        if($form->isValid())
        {
            $utilisateurf->setPassword(md5($utilisateurf->getPassword()));
            $utilisateurf->setRole("1");
            $utilisateurf->setUrlp("http://localhost/image/null.png");
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateurf);
            $em->flush();

        }

        return $this->render('sprint2RealEstateAdminBundle:Pages:gerants.html.twig',
        	array('utilisateur'=>$utilisateur, 'form'=>$form->createView()));
    }
    
    public function offresAction()
    {
      
        $offre_list= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Offre')
        ->findAll();

        return $this->render('sprint2RealEstateAdminBundle:Pages:offres.html.twig',
                array('offre'=>$offre_list));
    }
    
    public function agenceAction()
    {
        
        $request = $this->getRequest();
        if ($request->getMethod()=="POST"){  
            $nomx=$request->get('nom');
            $agantx=$this->getDoctrine()->getManager()->getRepository("sprint2RealEstateAdminBundle:Utilisateur")->findOneById($request->get('agant')); 
            $adressex=$this->getDoctrine()->getManager()->getRepository("sprint2RealEstateAdminBundle:Adresse")->findOneById($request->get('adresse'));
            $description=$request->get('description');

            $agencex= new \sprint2\RealEstate\AdminBundle\Entity\Agence();
            $agencex->setNom($nomx);
            $agencex->setIdGerant($agantx);
            $agencex->setIdAdresse($adressex);
            $agencex->setDescription($description);            

            $em=$this->getDoctrine()->getManager();
            $em->persist($agencex);
            $em->flush();     
        }
      
        $Agance= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Agence')
        ->findAll();
        
        $utilisateur= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>1));
        
        $adresse= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Adresse')
        ->findALl();

        return $this->render('sprint2RealEstateAdminBundle:Pages:agence.html.twig',
                array('agance'=>$Agance, 'utilisateur'=>$utilisateur, 'adresse'=>$adresse));
        
        
    }
    
    public function supprimerUCAction($id){
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($id);
        $em->remove($utilisateur);
        $em->flush();
        return $this->redirectToRoute("sprint2_real_estate_admin_clients");
    }
    
    public function supprimerUGAction($id){
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($id);
        $em->remove($utilisateur);
        $em->flush();
        return $this->redirectToRoute("sprint2_real_estate_admin_gerants");
    }
    
    public function supprimerAAction($id){
        $em = $this->getDoctrine()->getManager();
        $agence = $em->getRepository('sprint2RealEstateAdminBundle:Agence')->find($id);
        $em->remove($agence);
        $em->flush();
        return $this->redirectToRoute("sprint2_real_estate_admin_agence");
    }
    
}
