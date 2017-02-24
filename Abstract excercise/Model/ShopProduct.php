<?php

include "Chargeble.php";

abstract class ShopProduct implements Chargeble
{
    // properties defined here
    public $tittle;
    protected $price;

    public function __construct($tittle,$price)
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
    //If the child classes will use the same method but you know values for properties will be different
    abstract public function Display();
}
?>