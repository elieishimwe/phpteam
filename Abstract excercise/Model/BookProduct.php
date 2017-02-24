<?php

//The child class needs access to the file where the parent class is defined,
// so you need to include the parent file before defining the child class
require_once 'ShopProduct.php';

class BookProduct extends ShopProduct
{
    private $numPages;

    public function __construct($tittle,$price,$numPages)
    {
        parent::__construct($tittle,$price);
        $this->numPages=$numPages;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }
    public function Display()
    {
        // TODO: Implement Display() method.
        echo "<p>Book: $this->tittle ($this->numPages pages) Price: $this->price</p>";
    }
}
?>