<?php

require __DIR__ . '/CarFactory/Concretes/Factory/ElectricCarFactory.php';
require __DIR__ . '/CarFactory/Concretes/Factory/HybridCarFactory.php';

function showMenu()
{
    $prompt = "Select your car:
    \t1- electric
    \t2- hybrid \n -----> ";
    echo $prompt;
    return strtolower(readline());
}

$order = showMenu();
$car = null;

if ($order == '1' || $order == 'electric') {
    $car = new ElectricCarFactory();
} elseif ($order == '2' || $order == 'hybrid') {
    $car = new HybridCarFactory();
} else {
    throw new Exception("Invalid Car model $order.");
}

$carEngine = $car->createEngine();
$carBattery = $car->createBattery();
$carChargingStation = $car->createChargingStation();

echo "Car details:\n";
echo "Engine horsepower: " . $carEngine->getHorsePower() . "\n"; // Output: 200
echo "Battery range: " . $carBattery->getRange() . " miles\n"; // Output: 300 miles
echo "Charging station charge time: " . $carChargingStation->getChargeTime() . " minutes\n"; // Output: 60 minutes