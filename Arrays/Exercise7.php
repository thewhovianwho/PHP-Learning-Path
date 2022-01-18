<?php

$input = array("RacoOns", "DoGs", "Cats", "crOWs");

$lowercaseArray = array_map('strtolower', $input);
$uppercaseArray = array_map('strtoupper', $input);

print_r($lowercaseArray);
print_r($uppercaseArray);
