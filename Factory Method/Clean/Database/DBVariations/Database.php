<?php

require_once __DIR__ . '/../DBOperations/Find.php';

abstract class Database implements Find
{
    public function find(int $primaryKey, string $on): string
    {
        $builder = $this->createQuery();
        return $builder->execute($primaryKey, $on);
    }

    protected abstract function createQuery();
}
