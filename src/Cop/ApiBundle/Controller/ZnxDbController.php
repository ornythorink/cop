<?php

namespace Cop\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class ZnxDbController extends Controller
{
    /**
     * @Route("/home/products/znx/db/fr/{search}")
     */
    public function indexAction(Request $request)
    {
        $response = new JsonResponse();

        $search = $request->get('search');
        $locale = $request->getLocale();

        $em = $this->getDoctrine()->getManager();
        $repoProducts = $em->getRepository('Cop\DataStoreBundle\Entity\Products');
        $result = $repoProducts->findLatestForHome($search, $locale);

        $response->setData(serialize($result));

        return $response;

    }
}
