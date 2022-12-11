<?php

require_once __DIR__ . '/Database/DBVariations/MongoDatabase.php';
require_once __DIR__ . '/Database/DBVariations/MysqlDatabase.php';

$mysqlConnection = new MysqlDatabase();
$user = $mysqlConnection->find(1, 'users');
echo $user . PHP_EOL;

$mongoConnection = new MongoDatabase();
$user = $mongoConnection->find(1, 'users');
echo $user . PHP_EOL;
