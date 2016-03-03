<?php

namespace Cop\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\Client;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;


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

        $client = new Client();

        $response = $client
            ->get('http://163.172.129.160/app_dev.php/home/products/znx/db/fr/chaussures')
            //->get('http://www.ornythorink.ovh/app_dev.php/home/products/sdc/api/fr/')
            ->getBody()
            ->getContents();

        $produits = unserialize(json_decode($response));

         $form = $this->createFormBuilder()
            ->add('query', 'text', array(
                    'attr' => array(
                        'placeholder' => 'Rechercher ...',
                        'class' => 'form-control',
                    ))
            )->getForm();

        $adapter = new ArrayAdapter($produits->getArrayCopy());
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(16); // 10 by default
        $maxPerPage = $pagerfanta->getMaxPerPage(50);
        $pagerfanta->setCurrentPage(1); // 1 by default
        $currentPage = $pagerfanta->getCurrentPage();
        $nbResults = $pagerfanta->getNbResults();
        $currentPageResults = $pagerfanta->getCurrentPageResults();
        $pagerfanta->getNbPages();
        $pagerfanta->haveToPaginate();

        return $this->render('CopHomeBundle:Default:index.html.twig',
        array(
            'items' => $produits,
            'form' => $form->createView(),
            'brandFilter' => array(),
            'priceFilter' => array(),
            'pagination' => $pagerfanta,
        ));


    }


}
