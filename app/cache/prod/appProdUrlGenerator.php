<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'adresse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adresse/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adresse_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/adresse',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adresse_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adresse/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adresse_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adresse/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adresse_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/adresse',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adresse_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/adresse',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adresse_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/adresse',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/offre/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/offre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/offre/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/offre/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/offre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/offre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/offre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/offre/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_search_type' => array (  0 =>   array (    0 => 'type',  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchByTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),    1 =>     array (      0 => 'text',      1 => '/offre/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_search_prix' => array (  0 =>   array (    0 => 'prix',  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchByPriceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'prix',    ),    1 =>     array (      0 => 'text',      1 => '/offre/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_search_gerant' => array (  0 =>   array (    0 => 'id_gerant',  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchByGerantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_gerant',    ),    1 =>     array (      0 => 'text',      1 => '/offre/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_search_gouvern' => array (  0 =>   array (    0 => 'gouvernorat',  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchGouvernoratAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'gouvernorat',    ),    1 =>     array (      0 => 'text',      1 => '/offre/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'real_estate_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'real_estate_admins' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdministrateurController::afficherAdminsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'real_estate_ajoutAdmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdministrateurController::ajouterAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addAdmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'real_estate_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdministrateurController::afficherAdminsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offre_search_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchAjaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/search_results',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint2_real_estate_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint2_real_estate_admin_mailbox' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::mailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/MailBox',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint2_real_estate_admin_sentmail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::sentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/ComposeMail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint2_real_estate_admin_clients' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::clientsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint2_real_estate_admin_clients_supp' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::supprimerUCAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Admin/Clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint2_real_estate_admin_gerants' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::gerantsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Gerants',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint2_real_estate_admin_gerants_supp' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::supprimerUGAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Admin/Gerants',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint2_real_estate_admin_offres' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::offresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Offres',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint2_real_estate_admin_agence' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::agenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Agences',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint2_real_estate_admin_agence_supp' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::supprimerAAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Admin/Agences',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AcmeHomeBundle_ajax_update_mydata' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\AjaxController::updateDataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/ajax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AcmeHomeBundle_ajax_update_mydatab' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\AjaxController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/ajaxx',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}