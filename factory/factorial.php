
<?php

$num=4;

function Factorial ($num)
{
    $factorial=1;
    for ($x = $num; $x >= 1; $x--)
    {
        $factorial = $factorial * $x;
    }
    return $factorial;
}
    echo Factorial($num);


?>

