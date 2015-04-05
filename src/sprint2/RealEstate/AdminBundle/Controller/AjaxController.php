<?php

namespace sprint2\RealEstate\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use \sprint2\RealEstate\AdminBundle\Form\testAjaxForm;
/**
 * Description of AjaxController
 *
 * @author FATHALLAH Wael
 */
class AjaxController extends Controller
{
    public function indexAction()
    {
        return $this->render('sprint2RealEstateAdminBundle:Default:ajax.html.twig');
    }
    
    public function executeIndex()
        {
        $this->getUser()->setAttribute('cart', array());
        $this->products = $this->getProducts();
        }
    
    private function getProducts()
        {
        return array('iPod black', 'iMac', 'iMac RC', 'iPod');
        }

    
    
}
