<?php

use function PHPSTORM_META\type;

class EnemyFactory implements Factory
{
    public static function make(string $abstract, $options = null)
    {
        if ($abstract === 'alien' || $abstract === '1') {
            if (!($options instanceof AbstractTool)) {
                echo "Invalid Tool For Alien..." . PHP_EOL;
                throw new InvalidArgumentException();
            }
            return new Alien($options);
        } elseif ($abstract === 'man' || $abstract === '2') {
            if (!($options instanceof AbstractTool)) {
                echo "Invalid Tool For Man..." . PHP_EOL;
                throw new InvalidArgumentException();
            }
            return new Man($options);
        } elseif ($abstract === 'animal' || $abstract === '3') {
            if (!is_null($abstract)) {
                echo 'Animal does not get tool!!!' . PHP_EOL;
            }
            return new Animal();
        } else {
            echo "Invalid input..." . PHP_EOL;
            throw new InvalidArgumentException();
        }
    }
}
