<?php

namespace Cop\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


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

        var_dump($result[0]);
        exit;
        $encode = json_encode($result);
        $decode = json_decode($encode);

        var_dump($decode[0]);

        $response->setData(array(
            1
        ));

        return $response;

    }
}
