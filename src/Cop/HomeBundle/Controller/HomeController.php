<?php

namespace Cop\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;
use GuzzleHttp\Client;


class HomeController extends Controller
{
    /**
     * Home action
     *
     * @Route("/{_locale}/home")
     *
     */
    public function indexAction(Request $request)
    {
        $locale = $request->getLocale();


        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://163.172.129.160/app_dev.php/home/products/znx/db/fr/chaussures');
        $body = $response->getBody() ;
        $produits = unserialize(json_decode($body));


        $adapter = new ArrayAdapter($produits);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(16); // 10 by default
        $maxPerPage = $pagerfanta->getMaxPerPage(20);
        $pagerfanta->setCurrentPage(1); // 1 by default
        $currentPage = $pagerfanta->getCurrentPage();
        $nbResults = $pagerfanta->getNbResults();
        $currentPageResults = $pagerfanta->getCurrentPageResults();
        $pagerfanta->getNbPages();
        $pagerfanta->haveToPaginate();


        return $this->render('CopHomeBundle:Default:index.html.twig',
        array(
            'items' => $produits,
            'pagination' => $pagerfanta,
            'brandFilter' => array(),
            'priceFilter' => array(),
        ));


    }
}
