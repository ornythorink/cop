<?php

namespace Cop\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ProductDbRestController extends Controller
{
    public function getProductDbAction($search)
    {
        $em = $this->getDoctrine()->getManager();

        /* @var  \Cop\DataStoreBundle\Entity\ProductsRepository $repoProducts */
        $repoProducts = $em->getRepository('Cop\DataStoreBundle\Entity\Products');
        return $repoProducts->findRestLatestForHome($search);

    }
}
