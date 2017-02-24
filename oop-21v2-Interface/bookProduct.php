<?php
class bookProduct extends shopProduct
{

    private $numPages;

    public function __construct($title,$producerMainName,$producerFirstName,$price,$numPages)
    {
        parent::__construct($title,$producerMainName,$producerFirstName,$price);
        $this->numPages=$numPages;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }


}
?>