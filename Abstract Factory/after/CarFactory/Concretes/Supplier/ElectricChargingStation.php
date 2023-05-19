<?php

class ElectricChargingStation implements AbstractChargingStation {
    private $chargeTime;

    public function __construct($chargeTime) {
        $this->chargeTime = $chargeTime;
    }

    public function getChargeTime(): int {
        return $this->chargeTime;

    }
}