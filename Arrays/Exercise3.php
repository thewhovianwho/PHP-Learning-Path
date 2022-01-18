<?php

$input = file_get_contents('book.json');

// Turn into an associative array.

$decodedInput = json_decode($input,true);

// Loop through the array and print the info.

foreach($decodedInput as $key => $value)
{
    if(is_string($value))
    {
        echo $key.": ".$value."\n";
    }
    else
    {
       foreach ($decodedInput[$key] as $key => $value)
       {
           echo $key.": ".$value."\n";
       }
    }
}




