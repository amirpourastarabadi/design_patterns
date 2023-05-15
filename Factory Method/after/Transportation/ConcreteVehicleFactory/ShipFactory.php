<?php

require_once __DIR__ . '/../AbstractVehicleFactory/VehicleFactory.php';
require __DIR__ . '/../ConcreteVehicle/Ship.php';

class ShipFactory extends VehicleFactory
{
    public function factory(): Vehicle
    {
        return new Ship;
    }
}