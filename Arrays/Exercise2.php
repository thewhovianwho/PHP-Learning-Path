<?php

$color = array(4 => 'white', 6 => 'green', 11 => 'red');

// Get the first element of the above array (using a function).

echo reset($color)."\n";

// Get the first element of the above array (using for each loop).

foreach ($color as $index => $indexedColor)
{
    echo $indexedColor."\n";
    break;
}

