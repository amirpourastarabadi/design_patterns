<?php

require __DIR__ . '/Animal.php';
require __DIR__ . '/Dog.php';
require __DIR__ . '/Cat.php';
require __DIR__ . '/Bird.php';

$animals = [new Cat, new Dog, new Bird];

foreach ($animals as $animal) {
    echo $animal->getType() . ' says: ' . $animal->fly() . PHP_EOL;
}
