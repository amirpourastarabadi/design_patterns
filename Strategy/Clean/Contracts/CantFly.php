<?php

class CantFly implements Fly
{
    public function fly(): string
    {
        return "I can not fly.";
    }
}
