<?php

class Dog extends Animal
{
    public function setFlyAbility(): void
    {
        $this->flyAbility = new CantFly;
    }
}
