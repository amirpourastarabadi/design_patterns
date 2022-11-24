<?php

class ToolFactory implements Factory
{
    public static function make(string $abstract, $options = null)
    {
        if ($abstract === 'knife' || $abstract === '1') {
            return new Knife();
        } elseif ($abstract === 'gun' || $abstract === '2') {
            return new Gun();
        } elseif ($abstract === 'nun' || $abstract === '3') {
            return null;
        } else {
            echo "Invalid input..." . PHP_EOL;
            throw new InvalidArgumentException();
        }
    }
}
