<?php

require __DIR__ . '/Concrete/Vehicle/Truck.php';
require __DIR__ . '/Concrete/Vehicle/Train.php';
require __DIR__ . '/Concrete/Vehicle/Ship.php';
require __DIR__ . '/Concrete/Vehicle/Airplane.php';
require __DIR__ . '/Concrete/Cargo/Cargo.php';

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
    $vehicle = new Truck();
} elseif ($order == '2' || $order == 'airplane') {
    $vehicle = new Airplane();
} elseif ($order == '3' || $order == 'train') {
    $vehicle = new Train();
} elseif ($order == '4' || $order == 'ship') {
    $vehicle = new Ship();
} else {
    throw new Exception("Invalid Vehicle.");
}

$cargo = new Cargo('here', 'there');
$vehicle->transport($cargo);
