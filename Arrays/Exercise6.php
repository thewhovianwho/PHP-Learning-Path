<?php

$input = array(" Zitec\n", "Zitec\t\t", "\nZitec\t\t");
var_dump($input);

array_walk($input, "trim_value");
var_dump($input);

// user defined function

function trim_value(&$value)
{
    $value = trim($value);
}




