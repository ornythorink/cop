<?php

namespace Cop\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use GuzzleHttp\Client;
use GuzzleHttp\Promise;



    class ProductHomeController extends Controller
    {
        /**
         * @Route("/home/products/{search}")
         */
        public function indexAction(Request $request)
        {
            $response = new JsonResponse();

            $search = $request->get('search');
            $locale = $request->getLocale();

            $client = new Client();

            // Fetch some data
            $loremPromise  = $client->getAsync('http://www.ornythorink.ovh/app_dev.php/home/products/sdc/api/fr/');
            $randomPromise = $client->getAsync('http://163.172.129.160/app_dev.php/home/products/znx/db/fr/chaussures');

            // Wait on all of the requests to complete
            $results = Promise\unwrap([$loremPromise, $randomPromise]);

            $it1 = unserialize(json_decode($results[0]->getBody()->getContents()));
            $it2 = unserialize(json_decode($results[1]->getBody()->getContents()));

            $it1->merge($it2);

            $response->setData(serialize($it1));

            return $response;

        }
    }