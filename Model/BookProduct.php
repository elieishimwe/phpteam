<?php

/**
 * Created by PhpStorm.
 * User: moza
 * Date: 2017-02-21
 * Time: 12:05 PM
 */
class BookProduct extends ShopProduct
{
   private $numPages;

    public function getNumPages()
    {
        return $this->numPages;

    }


    public function __construct($title, $producerMainName, $producerFirstname, $price,$numPages)
    {
        parent::__construct($title, $producerMainName, $producerFirstname, $price);
        $this->numPages=$numPages;
    }


}