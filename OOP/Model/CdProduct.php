<?php

class CdProduct extends ShopProduct
{
    private $playLength;

    public function __construct($tittle,$producerMainName,$producerFirstName,$price,$playLength)
    {
        parent::__construct($tittle,$producerMainName,$producerFirstName,$price);
        $this->playLength=$playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }
}
?>