<?php

class DevOps extends Employee implements Notifiable
{
    public function notify(string $message): void
    {
        echo "send $message to $this->name from earth and sea..." . PHP_EOL;
        // notify via sms, slack, post
    }
}