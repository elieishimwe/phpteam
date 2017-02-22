<?php
    $x=5;


    function passN($x)
    {

        $fact=1;
        for($i=$x;  $i>=1 ; $i--)
        {
            $fact=$fact* $i;
        }
            return $fact;
    }



    Echo passN($x);


?>