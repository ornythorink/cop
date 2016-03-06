<?php

namespace Cop\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ProductHomeDbController extends Controller
{
    /**
     * @Route("/home/products/znx/db/fr/{search}", name="product_db")
     */
    public function indexAction(Request $request)
    {
        $response = new JsonResponse();

        $search = $request->get('search');
        $locale = $request->getLocale();

        $em = $this->getDoctrine()->getManager();

        /* @var  \Cop\DataStoreBundle\Entity\ProductsRepository $repoProducts */
        $repoProducts = $em->getRepository('Cop\DataStoreBundle\Entity\Products');
        $result = $repoProducts->findLatestForHome($search, $locale);

        $serialized = serialize($result);
        $response->setData($serialized);

        return $response;

    }
}
