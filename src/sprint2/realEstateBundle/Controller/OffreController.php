<?php

namespace sprint2\realEstateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sprint2\realEstateBundle\Entity\Adresse;
use sprint2\realEstateBundle\Entity\Offre;
use sprint2\realEstateBundle\Form\OffreType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Offre controller.
 *
 */
class OffreController extends Controller
{

    /**
     * Lists all Offre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('realEstateBundle:Offre')->findAll();
        $villes=$em->getRepository('realEstateBundle:Adresse')->findvilleDistinct();
        $gouvernorat='';
        return $this->render('realEstateBundle:Offre:OffreCard.html.twig', array(
            'entities' => $entities,'villes'=>$villes,'gouvernorat'=>$gouvernorat

        ));
    }
    /**
     * Creates a new Offre entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Offre();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('offre_show', array('id' => $entity->getId())));
        }

        return $this->render('realEstateBundle:Offre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Offre entity.
     *
     * @param Offre $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Offre $entity)
    {
        $form = $this->createForm(new OffreType(), $entity, array(
            'action' => $this->generateUrl('offre_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Offre entity.
     *
     */
    public function newAction()
    {
        $entity = new Offre();
        $form   = $this->createCreateForm($entity);

        return $this->render('realEstateBundle:Offre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Offre entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('realEstateBundle:Offre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('realEstateBundle:Offre:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Offre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('realEstateBundle:Offre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offre entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('realEstateBundle:Offre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Offre entity.
    *
    * @param Offre $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Offre $entity)
    {
        $form = $this->createForm(new OffreType(), $entity, array(
            'action' => $this->generateUrl('offre_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Offre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('realEstateBundle:Offre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('offre_edit', array('id' => $id)));
        }

        return $this->render('realEstateBundle:Offre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Offre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('realEstateBundle:Offre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Offre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('offre'));
    }

    /**
     * Creates a form to delete a Offre entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('offre_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }







//rechercher Par gouvernorat avec la methode POST Or get

    public function searchAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $entities = $em->getRepository('realEstateBundle:Offre')->findAll();
        
         if ($request->getMethod() == "POST") {  
            $gouvernorat=$request->get('gouvernorat')  ;
            $adresse  = $em->getRepository('realEstateBundle:Adresse')->findBy(array('gouvernorat'=>$gouvernorat));
            $entities = $em->getRepository('realEstateBundle:Offre')->findBy(array('Adresse' => $adresse));
            $villes=$em->getRepository('realEstateBundle:Adresse')->findvilleGouvernorat(array('gouvernorat'=>$gouvernorat));
        }
       if($request->getMethod() == "GET"){
            $gouvernorat=$request->get('gouvernorat')  ;
            $adresse  = $em->getRepository('realEstateBundle:Adresse')->findBy(array('gouvernorat'=>$gouvernorat));
            $entities = $em->getRepository('realEstateBundle:Offre')->findBy(array('Adresse' => $adresse));
            $villes=$em->getRepository('realEstateBundle:Adresse')->findvilleGouvernorat(array('gouvernorat'=>$gouvernorat));
        
       }
        return $this->render('realEstateBundle:Offre:OffreCard.html.twig', array(
            'entities' => $entities,'villes'=>$villes,'gouvernorat'=>$gouvernorat

        ));
    }

    public function searchAjaxAction(){

         $request = $this->container->get('request');
         $em = $this->getDoctrine()->getManager();
         $entities = $em->getRepository('realEstateBundle:Offre')->findAll();

         /*
            get deffirent responses from the request type
         */
       $entitie_room=array();
       $entitie_Etat=array();
       $roomType=$request->get('room_types');
       $etat=$request->get('Etat');
       $max=$request->get('maxprice');
       $min=$request->get('minprice');

       if($max === null){
            $max="100000";
       }
       if($min===null){
            $min="0";
       }

         if($request->isXmlHttpRequest()){

                if($roomType!=-1&&$roomType!==null)
                    $entitie_room=$em->getRepository('realEstateBundle:Offre')->findBy(array('typeimmob'=>$roomType));
                else
                     $entitie_room = $em->getRepository('realEstateBundle:Offre')->findAll();
               
                if($etat!=-1&&$etat!==null)
                    $entitie_Etat=$em->getRepository('realEstateBundle:Offre')->findBy(array('etat'=>$etat));
                else
                   $entitie_Etat=$em->getRepository('realEstateBundle:Offre')->findAll();
                          
                    $entities_price=(array)$this->searchByPrice($min,$max);
                    $entities_roomA=(array)$entitie_room;
                    $entities_roomE=(array)$entitie_Etat;

                    $entities_RE=$this->intersection($entities_roomA,$entities_roomE);
                    $entities=$this->intersection($entities_price,$entities_RE);

       
            return $this->container->get('templating')->renderResponse('realEstateBundle:Offre:offreCards.html.twig', array(
            'entities' => $entities
        ));

        }
        return  new Response("<p>".count($entities_roomE)."</p>");
    }


    public function searchByPrice($min,$max){

        $request=$this->container->get('request');
        $em = $this->getDoctrine()->getManager();
        

        $query = $em->createQuery(
                'SELECT o
                FROM realEstateBundle:Offre o
                WHERE o.payement BETWEEN ?1 AND ?2
               '
            )->setParameter(1,$min)
            ->setParameter(2,$max);

            $entities = $query->getResult();

         return $entities;

    }

    public function intersection($arr1,$arr2){

      
        $result=array();
        
        foreach($arr1 as $ob)
            foreach($arr2 as $obj){
                if ($obj->getId()==$ob->getId())
                    array_push($result,$obj);
            }

            return $result;
    }

}
