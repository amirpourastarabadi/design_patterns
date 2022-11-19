<?php

class Chicken extends Animal
{
    public function setFlyAbility(): void
    {
        $this->flyAbility = new CanFlyABit;
    }
}
