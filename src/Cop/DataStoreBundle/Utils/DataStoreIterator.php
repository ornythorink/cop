<?php

namespace Cop\DataStoreBundle\Utils;



class DataStoreIterator  extends  \ArrayObject
{

    public function __construct($data){
        parent::__construct($data);
    }

    /**
     * @var array
     *
     */
    private $brandFilter = array();

    /**
     * @var array
     *
     */
    private $priceFilter = array();


    /**
     * @return array
     */
    public function getBrandFilter()
    {
        return $this->brandFilter;
    }

    public function generateBrandFilter()
    {

        $filter = $this->getBrandFilter();
        usort($filter, function ($a, $b) {
            if ($a['weight'] == $b['weight']) {
                return 0;
            } else if ($a['weight'] > $b['weight']) {
                return -1;
            } else {
                return 1;
            }
        });
        $brands = array_chunk($filter, 6, TRUE);
        return $brands[0];
    }


    /**
     * @param array $brandFilter
     */
    public function setBrandFilter($brandFilter)
    {
        $this->brandFilter = $brandFilter;
    }

    public function merge( \Cop\DataStoreBundle\Utils\DataStoreIterator $outerIterator)
    {
        foreach($outerIterator as $item){
            $this->append($item);
        }

        $this->brandFilter = array_merge($this->brandFilter,$outerIterator->getBrandFilter());
        $this->priceFilter = array_merge($this->priceFilter,$outerIterator->getPriceFilter());
    }

    /**
     * @return array
     */
    public function getPriceFilter()
    {
        return $this->priceFilter;
    }

    /**
     * @param array $priceFilter
     */
    public function setPriceFilter($priceFilter)
    {
        $this->priceFilter[] = $priceFilter;
    }


    public function generatePriceFilter()
    {
        $priceRange = array();
        $maxPrice = max($this->getPriceFilter());
        $minPrice = min($this->getPriceFilter());
        $gap      = round($maxPrice * 0.20);
        for($i = (float) $minPrice; $i<=$maxPrice; $i += $gap)
        {
            $minBorne = $i;
            $maxBorne = $i + $gap;

            $priceRange[$minBorne . '|' . $maxBorne] = $minBorne . '€ - ' . $maxBorne. '€';
        }
        return $priceRange;
    }

}