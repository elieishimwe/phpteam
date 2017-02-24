<?php

include '../Model/BookProduct.php';
include '../Model/CdProduct.php';

$CdProduct=new CdProduct("Nasty C-Bad hair","R64.00",300);
$BookProduct=new BookProduct("50 Shades of grey","R90.00",500);

$BookProduct->Display();

$CdProduct->Display();

?>