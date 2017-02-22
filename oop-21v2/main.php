<?php
    include "shopProduct.php";
    include  "cdProduct.php";
    include  "bookProduct.php";


    $shopProduct = new shopProduct("Mr","TT", "Thabiso",1000.00);
    $cdProduct =  new  cdProduct("Mr","TT", "Thabiso",1000.00, 10);
    $bookProduct = new  bookProduct("Mr","TT", "Thabiso",1000.00, 12);


    var_dump($shopProduct);
    var_dump($cdProduct);
    var_dump($bookProduct);

?>