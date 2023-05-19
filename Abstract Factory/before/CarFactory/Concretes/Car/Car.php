<?php

require __DIR__ . '/../../Contracts/CarParts/Battery/AbstractBattery.php';
require __DIR__ . '/../../Contracts/CarParts/Engine/AbstractEngine.php';
require __DIR__ . '/../../Contracts/Supplier/ChargingStation/AbstractChargingStation.php';

class Car
{
    public function __construct(private AbstractEngine $engine, private AbstractBattery $battery, private AbstractChargingStation $chargingStation)
    {
    }

    public function getEngineHorsepower(): int
    {
        return $this->engine->getHorsepower();
    }

    public function getBatteryRange(): int
    {
        return $this->battery->getRange();
    }

    public function getChargingStationChargeTime(): int
    {
        return $this->chargingStation->getChargeTime();
    }
}
