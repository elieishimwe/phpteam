<?php

$sentence = "Hello world of developers";

$sentenceLength = strlen($sentence);

for($i=$sentenceLength-1; $i>=0; $i--)
{
    echo $sentence[$i];
}

?>