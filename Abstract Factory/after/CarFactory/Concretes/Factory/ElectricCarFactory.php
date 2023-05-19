<?php

require_once __DIR__ . '/../../Contracts/Factory/AbstractFactory.php';
require_once __DIR__ . '/../../Contracts/CarParts/Engine/AbstractEngine.php';
require_once __DIR__ . '/../../Contracts/CarParts/Battery/AbstractBattery.php';
require_once __DIR__ . '/../../Contracts/Supplier/ChargingStation/AbstractChargingStation.php';

require_once __DIR__ . '/../../Concretes/CarParts/Engine/ElectricEngine.php';
require_once __DIR__ . '/../../Concretes/CarParts/Battery/ElectricBattery.php';
require_once __DIR__ . '/../../Concretes/Supplier/ElectricChargingStation.php';

class ElectricCarFactory implements AbstractFactory {
    public function createEngine(): AbstractEngine {
        return new ElectricEngine(200);
    }

    public function createBattery(): AbstractBattery {
        return new ElectricBattery(300);
    }

    public function createChargingStation(): AbstractChargingStation {
        return new ElectricChargingStation(60);
    }
}