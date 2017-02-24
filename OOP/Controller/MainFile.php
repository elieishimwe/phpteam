<?php

include '../Model/ShopProduct.php';
include '../Model/BookProduct.php';
include '../Model/CdProduct.php';

$ShopProduct=new ShopProduct("Mvc Book","Danca","Zipho","R100.00");
$CdProduct=new CdProduct("Nasty C-Bad hair","Danca","Zipho",64.00,300);
$BookProduct=new BookProduct("50 Shades of grey","Danca","Zipho",90.00,5);

var_dump($ShopProduct);
var_dump($CdProduct);
var_dump($BookProduct);

?>