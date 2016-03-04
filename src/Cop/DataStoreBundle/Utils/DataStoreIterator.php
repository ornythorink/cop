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


    /**
     * @param array $brandFilter
     */
    public function setBrandFilter($brandFilter)
    {
        $this->brandFilter[] = $brandFilter;
    }

    public function merge( DataStoreIterator $outerIterator)
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


}