<?php

namespace Cop\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\Client;
use Cop\ApiBundle\Utils\SdcFluxApiConverter;


class ProductHomeApiController extends Controller
{
    private $api;


    private static $_request = '/publisher/3.0/rest/GeneralSearch';
    private static $_apiKey  = "6f8d716b-658d-401a-9f1c-6c37705138fb";
    private static $_trackingId  = "8059727";

    public function indexAction(Request $request, $search)
    {
        /*@todo gerer les pages */
        $page = 1 ;
        $response = new JsonResponse();

        $flux = $this->searchProducts($request, $search);

        $converter = new SdcFluxApiConverter($flux);
        $converter->convertFlux();
        $data = $converter->getItemsArray();

        $serialized = serialize($data);
        $response->setData($serialized);

        return $response;
    }

    public function searchProducts($request, $search)
    {
        $locale = $request->getLocale();
        $page = 1;
        $this->api = new Client();

        $agent = $_SERVER['HTTP_USER_AGENT'] ;
        $ip = $_SERVER['REMOTE_ADDR'];


        $params = array(
            "apiKey"=> self::$_apiKey ,
            "trackingId"=> self::$_trackingId,
            "keyword"=> $search,
            "numItems" => "60",
            "numOffersPerProduct"=>"20",
            "showProductSpecs"=>"true",
            "visitorUserAgent"=> $agent,
            "visitorIPAddress"=> $ip,
            "categoryId"=> 96602,
        ) ;

        if($page != 0)
        {
            $params['pageNumber'] = $page;
        }


        $uri = 'http://api.ebaycommercenetwork.com' . self::$_request ;
        $query = http_build_query($params, '', '&');

        if ( strlen($query) > 0 )
        {
            $uri .= '?' . $query;
        }

        $response = $this->api->get($uri);

        $body = $response->getBody()->getContents();

        return $body;
    }
}
