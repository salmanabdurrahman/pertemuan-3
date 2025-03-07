<?php

namespace Classes;
require_once 'Car.php';

// inheritence dari class Car
class ElectricCar extends Car
{
    public $batteryCapacity;

    public function __construct($brand, $model, $color, $batteryCapacity)
    {
        // penggunaan parent::
        parent::__construct($brand, $model, $color);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function getBatteryInfo()
    {
        return "Battery Capacity: {$this->batteryCapacity} kwh";
    }
}
