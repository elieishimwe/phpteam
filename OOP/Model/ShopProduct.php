<?php

class ShopProduct
{
    // properties defined here
    protected $tittle;
    protected $producerMainName;
    protected $producerFirstName;
    protected $price;

    public function __construct($tittle,$producerMainName,$producerFirstName,$price)
    {
        $this->tittle=$tittle;
        $this->price=$price;
    }

    // methods defined here
    public function getTittle()
    {
        return $this->tittle;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
?>