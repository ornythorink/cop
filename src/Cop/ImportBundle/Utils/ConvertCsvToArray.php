<?php
namespace Cop\ImportBundle\Utils;


class ConvertCsvToArray {


    public function convert($filename, $delimiter = ',')
    {
        if(!file_exists($filename) || !is_readable($filename)) {
            return FALSE;
        }

        $header = NULL;
        $data = array();
        if (($handle = fopen($filename, 'rb')) !== FALSE) {
            while (($row = fgetcsv($handle, 10000, $delimiter,'"', "\\"  )) !== FALSE) {
                if(!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }

        $obj = new \ArrayObject($data);
        return $obj->getIterator();
    }

}