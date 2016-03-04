<?php
namespace Cop\ApiBundle\Utils;

use Symfony\Component\DomCrawler\Crawler;
use Cop\DataStoreBundle\Entity\Products;
use Cop\DataStoreBundle\Utils\DataStoreIterator;


class SdcFluxApiConverter
{
	private $flux;

	public function __construct($flux)
	{
		$this->flux = $flux;
        $this->it = new DataStoreIterator(array());
	}
	
	public function convertFlux()
	{
		$crawler = new Crawler($this->flux);
		$filter = $crawler->filter('items > offer');

		if (iterator_count($filter) > 1) 
		{

		    foreach ($filter as $key => $content)
		    {
		        $crawler = new Crawler($content);
 				$datetime = new \DateTime('NOW');


                $item['price']				=  ( $crawler->filter('offer > basePrice')->count() >= 1)    ? $crawler->filter('offer > basePrice')->text() : null;
                $item['name']				=  ( $crawler->filter('name')->count() >= 1)     ?  utf8_decode( $crawler->filter('name')->text() ): null;
                $item['status']				=  "Validation";
                $item['oldPrice']			=  ( $crawler->filter('offer > originalPrice')->count() >= 1) ? $crawler->filter('offer > originalPrice')->text() : null;
                $item['currency'] 			=  'EUR' ;//( $crawler->filterXPath('offer/basePrice@currency')->count() >= 1) ? $crawler->filterXPath('offer/basePrice@currency')->text(): null ;
                $item['shortDescription'] 	=  ( $crawler->filter('description')->count() >= 1) ? utf8_decode($crawler->filter('description')->text() ): null ;
                $item['tinyImage'] 			=  ( $crawler->filter('imageList > image[available="true"]')->count() >= 1) ? $crawler->filter('imageList > image[available="true"]')->last()->text() : null ;
                $item['brand'] 				=  ( $crawler->filter('brand')->count() >= 1) ? $crawler->filter('brand')->text() : null ;
                $item['url'] 				=  ( $crawler->filter('offer > offerURL')->count() >= 1) ? $crawler->filter('offer > offerURL')->text() : null ;
                $item['delay']				=  ( $crawler->filter('deliveryTime')->count() >= 1) ? $crawler->filter('deliveryTime')->text() : null ;
                $item['specialPrice']	 	=  ( $crawler->filter('specialPrice')->count() >= 1) ? $crawler->filter('specialPrice')->text() : null ;
                $item['shipping']			=  ( $crawler->filter('deliveryTime')->count() >= 1) ? $crawler->filter('deliveryTime')->text() : null ;
                $item['shippingPrice'] 		=  ( $crawler->filter('shippingCost')->count() >= 1) ? $crawler->filter('shippingCost')->text() : null ;
                $item['store'] 				=  ( $crawler->filter('program')->count() >= 1) ? $crawler->filter('program')->text() : null ;
                $item['program']            =  ( $crawler->filter('store > name')->count() >= 1) ? $crawler->filter('store > name')->text() : null ;
                $item['source'] 			=  'SDC';
                $item['merchantCategory'] 	=  ( $crawler->filter('categoryId')->count() >= 1) ? $crawler->filter('categoryId')->text() : null ;
                $item['createdAt'] 			=  $datetime->format('Y-m-d');
                $item['lastUpdate'] 		=  $datetime->format('Y-m-d');

                $this->createItem($key, $item);
		    }
		}		
	}
	
	public function getItemsArray()
	{
    	return $this->it;
	}
	
	public function createItem($key, array $params)
	{
		$sourceType = 'API';

        $item = new Products();

        if(isset($params['id']))
        {
            $item->setId($params['id']);
        }
        $item->setName($params['name']);
        $item->setStatus($params['status']);
        $item->setPrice($params['price']);

        if(isset($params['oldPrice']))
        {
            $item->setPromo($params['oldPrice']);
        }
        $item->setCurrency($params['currency']);

        if(isset($params['shortDescription']))
        {
            $item->setDescription($params['shortDescription']);
        }

        if(isset($params['tinyImage']))
        {
            $item->setImage($params['tinyImage']);
        }
        $item->setBrand($params['brand']);
        $item->setUrl($params['url']);
        $item->setShortUrl($params['url']);
        if(isset($params['site_id']) ){
            $item->setSiteId($params['site_id']);
        }  else {
            $item->setSiteId('');
        }
        $item->setLocale('Y');
        $item->setLocale('fr');
        if(isset($params['program']) ){
            $item->setProgram($params['program']);
        }
        if(isset($params['source']))
        {
            $item->setSourceId($params['source']);
        }
        $item->setSourceType($sourceType);
        if(isset($params['merchantCategory']))
        {
            $item->setCategoryMerchant($params['merchantCategory']);
        }
        $item->setCreatedAt($params['createdAt']);

        if(isset($params['lastUpdate']))
        {
            $item->setUpdateAt($params['lastUpdate']);
        }

        if(isset($params['logostore']) ){
            $item->setLogostore($params['logostore']);
        }

        if(isset($params['apiid']) ){
            $item->setIdApi($params['apiid']);
        }

        $this->it->setBrandFilter($params['brand']);
        $this->it->setPriceFilter($params['price']);

        $this->it->append($item);


	}

}

