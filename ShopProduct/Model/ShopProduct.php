<?php

/**
 * Created by PhpStorm.
 * User: moza
 * Date: 2017-02-21
 * Time: 11:52 AM
 */
class ShopProduct
{
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;

    public function getTitle()
    {
        return $this->title;

    }
    public function getProducerMainName()
    {
        return $this->producerMainName;

    }
    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }
    public  function getPrice()
    {
        return $this->price;
    }

    public function __construct($title,$producerMainName,$producerFirstname,$price)

    {
        $this->title = $title;
        $this->producerMainName =$producerMainName;
        $this->producerFirstName =$producerFirstname;
        $this->price = $price;


    }

}
?>