<?php

require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/../Builders/NoSqlBuilder.php';

class MongoDatabase extends Database
{
    protected function createQuery()
    {
        return new NoSqlBuilder;
    }
}
