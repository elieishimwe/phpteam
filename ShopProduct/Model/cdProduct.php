<?php

class cdProduct extends shopProduct
{
    public  $playLength;

    public function __construct($title,$producerMainName,$producerFirstName,$price,$playLength)
    {
        parent::__construct($title,$producerMainName,$producerFirstName,$price);
        $this->$playLength=$playLength;
    }
}
?>