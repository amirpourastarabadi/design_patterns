<?php

interface Find
{
    public function find(int $primaryKey, string $on): string;
}
