<?php

require_once __DIR__ . '/../AbstractVehicleFactory/VehicleFactory.php';
require __DIR__ . '/../ConcreteVehicle/Airplane.php';

class AirplaneFactory extends VehicleFactory
{
    public function factory(): Vehicle
    {
        return new Airplane;
    }
}