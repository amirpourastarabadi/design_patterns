<?php

require_once __DIR__ . "/Builder.php";

class SqlBuilder implements Builder
{
    public function execute(int $primaryKey, string $on)
    {
        return "find $primaryKey in mysql in {$on} table.";
    }

}
