<?php

interface AbstractFactory {
    public function createEngine(): AbstractEngine;
    public function createBattery(): AbstractBattery;
    public function createChargingStation(): AbstractChargingStation;
}