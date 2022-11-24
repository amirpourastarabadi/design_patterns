<?php

class SoldierFactory implements Factory
{
    public static function make(string $abstract, $options = null)
    {

        if ($abstract === 'infanty' || $abstract === '1') {
            if (!($options instanceof AbstractTool)) {
                echo "Invalid Tool For Soldiers..." . PHP_EOL;
                throw new InvalidArgumentException();
            }
            return new Infanty($options);
        } elseif ($abstract === 'specialforce' || $abstract === '2') {
            if (!($options instanceof AbstractTool)) {
                echo "Invalid Tool For Soldiers..." . PHP_EOL;
                throw new InvalidArgumentException();
            }
            return new SpecialForce($options);
        } else {
            echo "Invalid input..." . PHP_EOL;
            throw new InvalidArgumentException();
        }
    }
}
