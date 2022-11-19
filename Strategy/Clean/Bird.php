<?php

class Bird extends Animal
{
    public function setFlyAbility(): void
    {
        $this->flyAbility = new CanFly;
    }
}
