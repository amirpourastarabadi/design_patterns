<?php

interface Builder
{
    public function execute(int $primaryKey, string $on);
}