<?php

require_once __DIR__ . "/Builder.php";

class NoSqlBuilder implements Builder
{
    public function execute(int $primaryKey, string $on)
    {
        return "find $primaryKey in mongo docs on {$on}";
    }
}
