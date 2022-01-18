<?php

$inputArray = array(1,2,3,4,5);

// Character to be inserted.
$toBeInserted = array('$');

// Insert '$' character.
array_splice($inputArray, 3, 0, $toBeInserted);

// Print modified array.
print_r($inputArray);