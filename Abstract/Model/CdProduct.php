<?php

require_once 'ShopProduct.php';
class CdProduct extends ShopProduct
{

    private $playlength;

    public function getPlaylength()
    {
        return $this->getPlaylength();
    }


    public function __construct($title,$price,$playlength)
    {
   parent::__construct($title,$price);
   $this->playlength = $playlength;
  }
     public function Display()
   {

      // echo "price";

       echo" the Cd title is:".$this->title." playlenght:".$this->playlength."min "."The price is R".$this->price."<br/>";


    }

}
?>