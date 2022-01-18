<?php

$string = "20";
$integer = 20;

checkDeepEqual($string, $integer);

function checkDeepEqual($value1, $value2)
{
    if ($value1 === $value2)
    {
        echo "The variables are deep equal.";
    }
    else
    {
        $value3 = (string) $value2;
        if ($value1 === $value3)
        {
            echo "Now the variables are deep equal.";
        }
    }
}