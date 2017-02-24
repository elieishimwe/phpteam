<?php
/**
 * Created by PhpStorm.
 * User: Siyaleader-0.1
 * Date: 2/24/2017
 * Time: 1:31 AM
 */
//include 'ShopProduct.php';
include'CdProduct.php';
include'BookProduct.php';

$CdProduct=new CdProduct("Gospel",100.00,60);
$BookProduct=new BookProduct("MVC Book",40.5,50);




$CdProduct->Display()."<br/>";
$BookProduct->Display();
?>