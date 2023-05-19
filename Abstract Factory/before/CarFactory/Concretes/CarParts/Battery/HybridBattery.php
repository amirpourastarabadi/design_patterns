<?php

class HybridBattery implements AbstractBattery {
    private $range;

    public function __construct($range) {
        $this->range = $range;
    }

    public function getRange(): int {
        return $this->range;
    }
}