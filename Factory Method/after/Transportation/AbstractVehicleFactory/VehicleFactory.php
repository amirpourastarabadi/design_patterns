<?php

require_once __DIR__ . '/../AbstractVehicle/Vehicle.php';

abstract class VehicleFactory
{
    abstract public function factory(): Vehicle;

    public function transport(Cargo $cargo)
    {
        $vehicle = $this->factory();
        
        $vehicle->transport($cargo);
    }

}