<?php

require_once __DIR__ . '/../AbstractVehicleFactory/VehicleFactory.php';
require __DIR__ . '/../ConcreteVehicle/Train.php';

class TrainFactory extends VehicleFactory
{
    public function factory(): Vehicle
    {
        return new Train;
    }
}