<?php
include "C:/Users/Thandekah/PhpstormProjects/Zipho_PHP_Dev/Model/ShopProduct.php";
include "C:/Users/Thandekah/PhpstormProjects/Zipho_PHP_Dev/Model/CdProduct.php";
include "C:/Users/Thandekah/PhpstormProjects/Zipho_PHP_Dev/Model/BookProduct.php";

$ShopProduct=new ShopProduct("Mr","Danca","Zipho",50.00);
$CdProduct=new CdProduct("Mr","Danca","Zipho",50.00,300);
$BookProduct=new BookProduct("Mr","Danca","Zipho",50.00,5);

var_dump($ShopProduct);
var_dump($CdProduct);
var_dump($BookProduct);

?>