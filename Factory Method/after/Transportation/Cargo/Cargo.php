<?php

class Cargo
{

    private static $last_serial_number = 0;

    private string $source = '';
    private string $destination = '';
    private string $serial_number = '';

    public function __construct(string $source, string $destination)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->serial_number = $this->generateSerialNumber();
    }

    private function generateSerialNumber()
    {
        static::$last_serial_number += 1;
        return static::$last_serial_number;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function getSerialNumber()
    {
        return $this->serial_number;
    }
}
