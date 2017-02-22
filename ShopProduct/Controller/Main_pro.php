<?php
/**
 * Created by PhpStorm.
 * User: moza
 * Date: 2017-02-21
 * Time: 01:02 PM
 */
include 'ShopProduct.php';
include 'CdProduct.php';
include 'BookProduct.php';
{
    $ShopProduct=new ShopProduct("m","dechris","marc",100.00);
    $CdProduct=new CdProduct("c","a","chri",20.00,200);
    $BookProduct=new BookProduct("b","m","moza",40.5,50);



    var_dump($ShopProduct);
    var_dump($CdProduct);
    var_dump($BookProduct);


}
?>