<?php

$first_date = new DateTime('1981-11-03');
$second_date = new DateTime('2013-09-04');

$difference = $first_date->diff($second_date);

echo $difference->format('%Y years, %m months, %d days.');
