<?php

    class cdProduct extends shopProduct
    {
        private  $playLength;

        public function __construct($title,$producerMainName,$producerFirstName,$price,$playLength)
        {
            parent::__construct($title,$producerMainName,$producerFirstName,$price);
            $this->$playLength=$playLength;
        }

        public function getPlayLength()
        {
            return $this->playLength;
        }
    }
?>