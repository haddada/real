<?php

namespace sprint2\realEstateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sprint2\realEstateBundle\Entity\Offre;

class DefaultController extends Controller
{
    public function indexAction()

    {
    	$em = $this->getDoctrine()->getManager();
    	$entities = $em->getRepository('realEstateBundle:Offre')->findAll();

        return $this->render('realEstateBundle:Default:offreCard.html.twig', array(
            'entities' => $entities,
		));
    }
}
