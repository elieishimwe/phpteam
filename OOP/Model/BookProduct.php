<?php

class BookProduct extends ShopProduct
{
    private $numPages;

    public function __construct($tittle,$producerMainName,$producerFirstName,$price,$numPages)
    {
        parent::__construct($tittle,$producerMainName,$producerFirstName,$price);
        $this->numPages=$numPages;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }
}
?>