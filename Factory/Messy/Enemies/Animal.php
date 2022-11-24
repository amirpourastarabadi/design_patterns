<?php

class Animal extends AbstractEnemy
{
    protected static int $numberOfAnimals = 0;

    public function __construct()
    {
        static::$numberOfAnimals += 1;
        $this->setEnemyName();
    }

    public function makeDamage(Soldier $soldier)
    {
        echo $this->name . ' made -5 damage to ' . $soldier->getName() . PHP_EOL;
    }

    protected function setEnemyName()
    {
        $this->name = basename(static::class) . " " . self::$numberOfAnimals;
    }
}
