<?php

class Programmer extends Employee implements Notifiable
{
    public function notify(string $message): void
    {
        echo "send $message to $this->name from earth..." . PHP_EOL;
        // notify via slack
    }
}
