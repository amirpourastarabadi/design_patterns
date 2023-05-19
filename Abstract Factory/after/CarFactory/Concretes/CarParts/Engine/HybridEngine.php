<?php


class HybridEngine implements AbstractEngine {
    private $horsepower;

    public function __construct($horsepower) {
        $this->horsepower = $horsepower;
    }

    public function getHorsePower(): int {
        return $this->horsepower;
    }
}