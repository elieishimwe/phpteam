<?php

require_once 'ShopProduct.php';

class CdProduct extends ShopProduct
{
    private $playLength;

    public function __construct($tittle,$price,$playLength)
    {
        parent::__construct($tittle,$price);
        $this->playLength=$playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }
    public function Display()
    {
        // TODO: Implement Display() method.
        echo "<p>CD: $this->tittle ($this->playLength minutes) Price: $this->price</p>";
    }
}
?>