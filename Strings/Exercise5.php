<?php

$colours = ['green', 'blue', 'red', 'yellow', 'black'];

convertArrayToString($colours);

function convertArrayToString($array)
{
   var_dump(implode(",", $array));
   // echo implode(",", $array);

}