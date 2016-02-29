<?php

namespace Cop\ImportBundle\Utils;


class SourcesConfig
{
    protected static $sources = array(
        'znx' =>
            array(
                'merchantCategoryName' => 'MerchantProductCategoryPath'
            )
    );

    public static function getSourceKey($source, $key)
    {
        return self::$sources[$source][$key];
    }
}