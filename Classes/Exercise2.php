<?php

class Exercise2
{

    public $firstName;

    function __construct()
    {
        // echo "Initialization successful!\n";
    }

    public function say_hello($firstName)
    {
        echo "Hello All, I am ".$firstName.".\n";
    }

}

$myObject = new Exercise2();
$myObject->say_hello('Scott');