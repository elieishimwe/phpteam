<?php
class bookProduct extends shopProduct
{

    public $numPages;

    public function __construct($title,$producerMainName,$producerFirstName,$price,$numPages)
    {
        parent::__construct($title,$producerMainName,$producerFirstName,$price);
        $this->numPages=$numPages;
    }
}
?>