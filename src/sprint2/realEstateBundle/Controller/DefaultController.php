<?php

namespace sprint2\realEstateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('realEstateBundle:administrateur:dashboard.html.twig');
    }
}
