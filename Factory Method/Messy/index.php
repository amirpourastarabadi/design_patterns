<?php


require_once __DIR__ . '/Mysql.php';
require_once __DIR__ . '/Mongo.php';

$input = readline("Enter Database Connection: ");

$databaseConnection = null;
if ($input === "mysql") {
    $databaseConnection = new Mysql();
} elseif ($input === "mongodb") {
    $databaseConnection = new Mongo();
}

$user = $databaseConnection->find(1);


echo $user . PHP_EOL;
