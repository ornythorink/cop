<?php

namespace Cop\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class ZnxDbController extends Controller
{
    /**
     * @Route("/home/products/znx/db/{search}")
     */
    public function indexAction(Request $request)
    {
        $response = new JsonResponse();

        $search = $request->get('search');
        $locale = $request->getLocale();

        $em = $this->getDoctrine()->getManager();
        $repoProducts = $em->getRepository('Cop\DataStoreBundle\Entity\Products');
        $result = $repoProducts->findLatestForHome($search, $locale);


//        $test = json_encode(serialize($result));
//        $re   = unserialize(json_decode($test));

        $response->setData(array(
            serialize($result)
        ));

        return $response;

    }
}
