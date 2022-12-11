<?php

class Mongo
{
    public function find(int $primaryKey)
    {
        return "find $primaryKey in mongo docs";
    }
}