<?php

class Animal 
{
    public function fly()
    {
        return "Flight heigh.";
    }

    public function getType()
    {
        return basename(static::class);
    }
}
