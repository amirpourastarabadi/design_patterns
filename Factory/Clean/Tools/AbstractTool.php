<?php

abstract class AbstractTool
{
    protected float $power;

    public function __construct(float $power = 0)
    {
        $this->setPower($power);
    }

    public function setPower(float $power)
    {
        $this->power = $power == 0 ? random_int(1, 10) : $power;
    }

    public function getPower()
    {
        return $this->power;
    }
}
