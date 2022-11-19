<?php

require __DIR__ . '/Contracts/Flay.php';
require __DIR__ . '/Contracts/CantFly.php';
require __DIR__ . '/Contracts/CanFly.php';
require __DIR__ . '/Contracts/CanFlyABit.php';
require __DIR__ . '/Animal.php';
require __DIR__ . '/Dog.php';
require __DIR__ . '/Cat.php';
require __DIR__ . '/Bird.php';
require __DIR__ . '/Chicken.php';

$animals = [new Cat, new Dog, new Bird, new Chicken];

foreach ($animals as $animal) {
    echo $animal->getType() . ' says: ' . $animal->tryFly() . PHP_EOL;
}
