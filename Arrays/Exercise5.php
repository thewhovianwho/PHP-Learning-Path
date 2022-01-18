<?php

$recordedTemperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

sort($recordedTemperatures);

$average = bcdiv(array_sum($recordedTemperatures)/count($recordedTemperatures),1, 2);
$lowest = array_slice($recordedTemperatures, 0,5);
$highest = array_slice($recordedTemperatures, -5,5);

echo "Average Temperature: ".$average."\n";

// Use implode to join array elements with ',' to a string.

echo "5 Lowest temperatures: ".implode(",", $lowest).",\n";
echo "5 Highest temperatures: ".implode(",", $highest).",\n";