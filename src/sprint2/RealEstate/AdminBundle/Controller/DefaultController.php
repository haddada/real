<?php

namespace sprint2\RealEstate\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sprint2\RealEstate\AdminBundle\Entity\Utilisateur;
use sprint2\RealEstate\AdminBundle\Entity\Offre;
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
        //array_slice($utilisateur,-6)
        //count($utilisateur);

        return $this->render('sprint2RealEstateAdminBundle:Default:index.html.twig',
                array('utilisateurg'=>array_slice($utilisateur_last_6_gerants,-8), 
                    'utilisateurc'=>array_slice($utilisateur_last_6_client,-8), 
                    'offre'=>array_slice($offre_last_6,-5),
                    'utilisateurgn'=>count($utilisateur_last_6_gerants),
                    'utilisateurcn'=>count($utilisateur_last_6_client),
                    'offren'=>count($offre_last_6)));
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
        $utilisateur= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>2));

        return $this->render('sprint2RealEstateAdminBundle:Pages:client.html.twig',
        	array('utilisateur'=>$utilisateur));
    }
    
    public function gerantsAction()
    {
        $utilisateur= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>1));

        return $this->render('sprint2RealEstateAdminBundle:Pages:gerants.html.twig',
        	array('utilisateur'=>$utilisateur));
    }
    
}
