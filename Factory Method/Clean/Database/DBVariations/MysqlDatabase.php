<?php

require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/../Builders/SqlBuilder.php';

class MysqlDatabase extends Database
{
    protected function createQuery()
    {
        return new SqlBuilder;
    }
}
