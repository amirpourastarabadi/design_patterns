<?php

class Cat extends Animal
{
    public function setFlyAbility(): void
    {
        $this->flyAbility = new CantFly;
    }
}
