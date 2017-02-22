<?php


    class shopProduct
    {
        private $title;
        private $producerMainName;
        private $producerFirstName;
        protected $price;



        public function __construct($title,$producerMainName,$producerFirstName,$price)
        {
            $this->$title=$title;
            $this->$producerMainName=$producerMainName;
            $this->$producerFirstName=$producerFirstName;
            $this->$price=$price;

        }

        public function getTitle()
        {
            return $this->title;
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

    }
?>