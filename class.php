<?php

class Car
{
    public static $name = "Lambo car";
    public function __construct(public $brand, public $color, public $wheels)
    {
    }

    public function drive()
    {
        echo $this->brand . " car is driving";
    }

    public function stop()
    {
        echo "car is stopped";
    }

    public function drift()
    {
        $this->stop();
        echo "<br>";
        echo "drifiting the car with color : " . $this->color;
    }

    public static function demoQuickDrive()
    {
        $car = new static("BMW", "blue", 4);
        $car->drive();
    }
}

Car::demoQuickDrive();
