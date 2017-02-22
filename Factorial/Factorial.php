<?php
    $value = 4;

    function Factorial($value)
    {
        $factorial=1;

        for($x=$value;$x>=1;$x--)
        {
            $factorial=$factorial*$x;
        }
        return $factorial;
    }
    echo Factorial($value);
?>