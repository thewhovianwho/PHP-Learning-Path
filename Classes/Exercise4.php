<?php

class Exercise4
{
    public $firstValue;
    public $secondValue;

    public function __construct($tempFirstValue, $tempSecondValue)
    {
        $this->firstValue = $tempFirstValue;
        $this->secondValue = $tempSecondValue;
    }

    public function add()
    {
        return $this->firstValue + $this->secondValue;
    }

    public function substract()
    {
        return $this->firstValue - $this->secondValue;
    }

    public function multiply()
    {
        return $this->firstValue * $this->secondValue;
    }

    public function divide()
    {
        return $this->firstValue / $this->secondValue;
    }

}

$myObject = new Exercise4(12, 6);

echo $myObject->add()."\n";
echo $myObject->substract()."\n";
echo $myObject->multiply()."\n";
echo $myObject->divide()."\n";