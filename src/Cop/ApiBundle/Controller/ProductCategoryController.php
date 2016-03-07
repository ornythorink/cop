<?php

namespace Cop\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use GuzzleHttp\Client;
use GuzzleHttp\Promise;



    class ProductCategoryController extends Controller
    {
        public function indexAction(Request $request)
        {
            $response = new JsonResponse();

            $search = $request->get('search');
            $locale = $request->getLocale();

            $client = new Client();

            // Fetch some data
            $loremPromise =  $client->getAsync('http://www.ornythorink.ovh/app_dev.php/'.$locale.'/sdc/api/category/'. $search);
            $randomPromise = $client->getAsync('http://www.ornythorink.ovh/app_dev.php/'.$locale.'/znx/db/category/'. $search);

            // Wait on all of the requests to complete
            $results = Promise\unwrap([$loremPromise, $randomPromise]);

            /* @var \Cop\DataStoreBundle\Utils\DataStoreBundle  $it1 */
            /* @var \Cop\DataStoreBundle\Utils\DataStoreBundle  $it2 */
            $it1 = unserialize(json_decode($results[0]->getBody()->getContents()));
            $it2 = unserialize(json_decode($results[1]->getBody()->getContents()));

            $it1->merge($it2);

            $response->setData(serialize($it1));

            return $response;

        }
    }