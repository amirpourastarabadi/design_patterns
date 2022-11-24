<?php

interface Factory
{
    public static function make(string $abstract, $options = null);
}