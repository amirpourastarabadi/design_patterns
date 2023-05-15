<?php

require __DIR__ . '/Transportation/ConcreteVehicleFactory/TruckFactory.php';
require __DIR__ . '/Transportation/ConcreteVehicleFactory/TrainFactory.php';
require __DIR__ . '/Transportation/ConcreteVehicleFactory/ShipFactory.php';
require __DIR__ . '/Transportation/ConcreteVehicleFactory/AirplaneFactory.php';
require __DIR__ . '/Transportation/Cargo/Cargo.php';

function showMenu()
{
    $prompt = "Select your vehicle:
    \t1- truck
    \t2- airplane
    \t3- train
    \t4- ship \n -----> ";
    echo $prompt;
    return strtolower(readline());
}

$order = showMenu();
$vehicle = null;

if ($order == '1' || $order == 'truck') {
    $vehicle = new TruckFactory();
} elseif ($order == '2' || $order == 'airplane') {
    $vehicle = new AirplaneFactory();
} elseif ($order == '3' || $order == 'train') {
    $vehicle = new TrainFactory();
} elseif ($order == '4' || $order == 'ship') {
    $vehicle = new ShipFactory();
} else {
    throw new Exception("Invalid Vehicle.");
}

$cargo = new Cargo('here', 'there');
$vehicle->transport($cargo);
