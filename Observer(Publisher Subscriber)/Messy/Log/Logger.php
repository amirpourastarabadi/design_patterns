<?php

class Logger
{

    public function log(LogLevels $level, string $message, array $data = [])
    {
        // log $message and $data to file, elastic, database or ...
        echo "log : $message" . PHP_EOL;
    }
}
