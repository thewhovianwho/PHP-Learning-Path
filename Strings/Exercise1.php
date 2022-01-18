<?php

$sample = "'The quick brown fox jumps over the lazy dog.";
$word = "jumps";

testItIfContains($word, $sample);

function testItIfContains($substring, $string)
{
    if(strpos($string, $substring) != false)
    {
        echo "The specific word is present.";
    }

}