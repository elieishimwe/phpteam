<?php
class ShopProduct
{
    private $tittle;
    private $producerMainName;
    private $producerFirstName;
    protected $price;

    public function getTittle()
    {
        return $this->tittle;
    }

    public function getProducerMainName()
    {
        return $this->producerMainName;
    }

    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function __construct($tittle,$producerMainName,$producerFirstName,$price)
    {
        $this->tittle=$tittle;
        $this->producerMainName=$producerMainName;
        $this->producerFirstName=$producerFirstName;
        $this->price=$price;
    }

}
?>