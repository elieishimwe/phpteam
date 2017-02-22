<?php

/**
 * Created by PhpStorm.
 * User: moza
 * Date: 2017-02-21
 * Time: 12:01 PM
 */
class CdProduct extends ShopProduct
{
   private $playlength;
   public function getPlaylength()
   {
       return $this->getPlaylength();
   }


    public function __construct($title, $producerMainName, $producerFirstname, $price,$playlength)
    {
        parent::__construct($title, $producerMainName, $producerFirstname, $price);
        $this->playlength = $playlength;
    }
}