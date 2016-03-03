<?php

namespace Cop\ApiBundle\Utils;

use GuzzleHttp\Client;


class SdcDataSourceApi
{
	private $api;

    private static $_request = '/publisher/3.0/rest/GeneralSearch';
    private static $_param   = null;

    private static $_apiKey  = "6f8d716b-658d-401a-9f1c-6c37705138fb";
    private static $_trackingId  = "8059727";


    public function __construct()
	{
       $this->api = new Client();
	}

	public function getProductFlux($term)
	{
        $agent = $_SERVER['HTTP_USER_AGENT'] ;
        $ip = $_SERVER['REMOTE_ADDR'];

        $keyword = "chaussure";


        $parameters = array(
            "apiKey"=> self::$_apiKey ,
            "trackingId"=> self::$_trackingId,
            "keyword"=> $term,
            "numItems" => "60",
            "showProductOffers" => "false",
            "numOffersPerProduct"=>"20",
            "showProductSpecs"=>"true",
            "visitorUserAgent"=> $agent,
            "visitorIPAddress"=> $ip,
            "showProductsWithoutOffers"=>"false"

        ) ;

        $xml = $this->searchProducts($parameters);

		return $xml;
	}

    public function searchProducts($parameters)
    {

        $uri = 'http://api.ebaycommercenetwork.com' . self::$_request ;


        $query = http_build_query($parameters, '', '&');

        if ( strlen($query) > 0 )
        {
            $uri .= '?' . $query;
        }

        $response = $this->api->get($uri);

        $body = $response->getBody()->getContents();

        return $body;
    }
}
