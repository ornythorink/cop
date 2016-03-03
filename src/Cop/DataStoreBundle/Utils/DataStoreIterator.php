<?php

namespace Cop\DataStoreBundle\Utils;



class DataStoreIterator extends  \ArrayIterator
{

    public function __construct($data){
        parent::__construct($data);
    }

    /**
     * @var array
     *
     */
    private $brandFilter;

    /**
     * @var array
     *
     */
    private $priceFilter;


    /**
     * @return array
     */
    public function getBrandFilter()
    {
        return $this->brandFilter;
    }


    /**
     * @param array $brandFilter
     */
    public function setBrandFilter($brandFilter)
    {
        $this->brandFilter[] = $brandFilter;
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


}