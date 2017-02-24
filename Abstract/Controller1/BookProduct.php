<?php
require_once 'ShopProduct.php';
 class BookProduct extends ShopProduct
{

    private $numPages;

    public function getNumPages()
    {
        return $this->numPages;

    }


    public function __construct($title,$price,$numPages)
   {
      parent::__construct($title,$price);
       $this->numPages=$numPages;
    }

    public function Display()
    {
        //echo $this->numPages."".$this->price;

        echo "Book tittle is:".$this->title."  The price is:R".$this->price."  Number of pages:".$this->numPages;
    }


}