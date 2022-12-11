<?php

class Mysql
{
    public function find(int $primaryKey)
    {
        return "find $primaryKey in {$this->table} in mysql tables";
    }
}