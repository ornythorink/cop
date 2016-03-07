<?php

namespace Cop\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProductCategoryDbRestController extends Controller
{
    public function getProductCategoryDbAction($search)
    {
        $em = $this->getDoctrine()->getManager();

        /* @var  \Cop\DataStoreBundle\Entity\ProductsRepository $repoProducts */
        $repoProducts = $em->getRepository('Cop\DataStoreBundle\Entity\Products');
        return $repoProducts->findRestForCategory($search);
    }
}
