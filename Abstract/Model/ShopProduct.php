<?php


 include"Chargeable.php";

abstract class ShopProduct implements Chargeable
{

   // private $producerMainName;
    //private $producerFirstName;
    protected $title;
    protected $price;

    public function getTitle()
    {
        return $this->title;

    }
   // public function getProducerMainName()
   // {
   //     return $this->producerMainName;

  //  }
   //public function getProducerFirstName()
   // {
   //     return $this->producerFirstName;
   // }
    public  function getPrice()
    {
        return $this->price;
    }

    public function __construct($title,$price)

    {
        $this->title = $title;
        $this->price = $price;

        //$this->producerMainName =$producerMainName;
        //$this->producerFirstName =$producerFirstname;
    }
     abstract public function Display();

}
?>


