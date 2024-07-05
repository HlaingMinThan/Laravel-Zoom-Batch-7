<?php

class Car
{

    public function __construct(public $brand, public $color, protected $wheels)
    {
    }
}


class SportCar extends Car
{
    public function testWheels()
    {
        echo $this->wheels; // ?????
    }
}

$car = new SportCar("BMW", "blue", 4);

$car->testWheels();
