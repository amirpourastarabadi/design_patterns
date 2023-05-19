<?php

require_once __DIR__ . '/../../Contracts/Factory/AbstractFactory.php';
require_once __DIR__ . '/../../Contracts/CarParts/Engine/AbstractEngine.php';
require_once __DIR__ . '/../../Contracts/CarParts/Battery/AbstractBattery.php';
require_once __DIR__ . '/../../Contracts/Supplier/ChargingStation/AbstractChargingStation.php';

require_once __DIR__ . '/../../Concretes/CarParts/Engine/HybridEngine.php';
require_once __DIR__ . '/../../Concretes/CarParts/Battery/HybridBattery.php';
require_once __DIR__ . '/../../Concretes/Supplier/HybridChargingStation.php';

class HybridCarFactory implements AbstractFactory {
    public function createEngine(): AbstractEngine {
        return new HybridEngine(150);
    }

    public function createBattery(): AbstractBattery {
        return new HybridBattery(500);
    }

    public function createChargingStation(): AbstractChargingStation {
        return new HybridChargingStation(30);
    }
}