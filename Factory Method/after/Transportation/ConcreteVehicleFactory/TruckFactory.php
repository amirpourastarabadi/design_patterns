<?php

require_once __DIR__ . '/../AbstractVehicleFactory/VehicleFactory.php';
require __DIR__ . '/../ConcreteVehicle/Truck.php';

class TruckFactory extends VehicleFactory
{
    public function factory(): Vehicle
    {
        return new Truck;
    }
}
