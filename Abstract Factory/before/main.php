<?php

require __DIR__ . '/CarFactory/Concretes/Car/Car.php';
require __DIR__ . '/CarFactory/Concretes/CarParts/Engine/ElectricEngine.php';
require __DIR__ . '/CarFactory/Concretes/CarParts/Engine/HybridEngine.php';
require __DIR__ . '/CarFactory/Concretes/CarParts/Battery/ElectricBattery.php';
require __DIR__ . '/CarFactory/Concretes/CarParts/Battery/HybridBattery.php';
require __DIR__ . '/CarFactory/Concretes/Supplier/ElectricChargingStation.php';
require __DIR__ . '/CarFactory/Concretes/Supplier/HybridChargingStation.php';

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
    $engine = new ElectricEngine(200);
    $battery = new ElectricBattery(300);
    $chargingStation = new ElectricChargingStation(60);
    $car = new Car($engine, $battery, $chargingStation);
} elseif ($order == '2' || $order == 'hybrid') {
    $engine = new HybridEngine(150);
    $battery = new HybridBattery(500);
    $chargingStation = new HybridChargingStation(30);
    $car = new Car($engine, $battery, $chargingStation);
} else {
    throw new Exception("Invalid Car model $order.");
}

echo "Car details:\n";
echo "Engine horsepower: " . $car->getEngineHorsepower() . "\n";
echo "Battery range: " . $car->getBatteryRange() . " miles\n";
echo "Charging station charge time: " . $car->getChargingStationChargeTime() . " minutes\n";
