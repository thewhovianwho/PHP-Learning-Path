<?php

$colors = ["c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red"];

// Call function.

getFrequencyOfValues($colors, 'Red');

// Define function.

function getFrequencyOfValues($array, $input)
{

    $freq = array_count_values($array);

    foreach ($freq as $key => $value)
    {

        if ($freq[$input] == 1)
        {
            echo $input." color appears ".$freq[$input]. " time.";
            break;
        }
        else
        {
            echo $input." color appears ".$freq[$input]. " times.";
            break;
        }

 }
}
