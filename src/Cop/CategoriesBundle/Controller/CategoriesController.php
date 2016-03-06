<?php

namespace Cop\CategoriesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\Client;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;


class CategoriesController extends Controller
{
    /**
     * Categories action
     *
     * @Route("/{_locale}/category/{slug}/{page}",
     * name="app_categories_byslug",
     * requirements={"page" = "\d+","_locale" = "%app.locales%"},
     * defaults={"page" = "1","_locale" = "fr"})
     *
     */
    public function indexAction($slug, Request $request, $page = 1)
    {
        $locale = $request->getLocale();


        $em = $this->getDoctrine()->getManager();
        $categoriesRepository = $em->getRepository('AppBundle:Categories');
        $categorie = $categoriesRepository->findOneByCategoryslug($slug);

        $term = $categorie->getTerm();
        $label = $categorie->getNameCategorie();

        $parent = $categoriesRepository->findRootCategoriesByChildSlug($slug);

        $client = new Client();
        $response = $client
            ->get('http://163.172.129.160/app_dev.php/category/products/bottes')
            ->getBody()
            ->getContents();

        $produits = unserialize(json_decode($response));
        $brandFilter = $produits->generateBrandFilter();
        $priceFilter = $produits->generatePriceFilter();

        $pagerfanta = $this->paginate($produits, $page);
        if (true == $pagerfanta->haveToPaginate()) {
            $sliceProducts = array_chunk($produits->getArrayCopy(), 10);
            $produits = $sliceProducts[$page - 1];
        }

        return $this->render('CopHomeBundle:Default:index.html.twig',
        array(
            'items' => $produits,
            'form' => $this->generateForm()->createView(),
            'brandFilter' => $brandFilter,
            'priceFilter' => $priceFilter,
            'pagination' => $pagerfanta,
        ));
    }

    /**
     * generate for search
     *
     * @return \Symfony\Component\Form\Form
     */
    private function generateForm()
    {
        return
            $this->createFormBuilder()
                  ->add('query', 'text',
            array( 'attr' => array(
                        'placeholder' => 'Rechercher ...',
                        'class' => 'form-control',
                    ))
            )->getForm();
    }

    /**
     * @param $produits
     * @param $page
     *
     * @return Pagerfanta
     */
    private function paginate( $produits, $page)
    {
        $adapter = new ArrayAdapter($produits->getArrayCopy());
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(16); // 10 by default
        $maxPerPage = $pagerfanta->getMaxPerPage(10);
        $pagerfanta->setCurrentPage($page); // 1 by default
        $currentPage = $pagerfanta->getCurrentPage();
        $nbResults = $pagerfanta->getNbResults();
        $currentPageResults = $pagerfanta->getCurrentPageResults();
        $pagerfanta->getNbPages();
        $pagerfanta->haveToPaginate();

        return $pagerfanta;
    }

}
