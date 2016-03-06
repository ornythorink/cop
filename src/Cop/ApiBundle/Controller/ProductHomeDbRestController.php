<?php

namespace Cop\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProductHomeDbRestController extends Controller
{
    public function getProductDbAction($search)
    {
        $em = $this->getDoctrine()->getManager();

        /* @var  \Cop\DataStoreBundle\Entity\ProductsRepository $repoProducts */
        $repoProducts = $em->getRepository('Cop\DataStoreBundle\Entity\Products');
        return $repoProducts->findRestLatestForHome($search);

    }
}
