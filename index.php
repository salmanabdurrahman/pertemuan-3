<?php

require_once 'Classes/Car.php';
require_once 'Classes/ElectricCar.php';

// penggunaan use
use Classes\Car;
use Classes\ElectricCar;

$toyota = new Car('Toyota', 'Camry', 'White');
$avanza = new Car('Toyota', 'Avanza', 'Silver');

echo $toyota->getBrandInfo();
echo "<br>";
// pemanggilan static method
echo Car::getCount();
echo "<br>";

$tesla = new ElectricCar('Tesla', 'Model 3', 'Black', '75');
echo $tesla->getBatteryInfo();
echo "<br>";
echo $tesla->getBrandInfo();