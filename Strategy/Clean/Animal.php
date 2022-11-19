<?php

abstract class Animal
{
    protected Fly $flyAbility;

    public function __construct()
    {
        $this->setFlyAbility();
    }

    public function tryFly()
    {
        return $this->flyAbility->fly();
    }

    public function getType()
    {
        return basename(static::class);
    }

    public abstract function setFlyAbility(): void;
}
