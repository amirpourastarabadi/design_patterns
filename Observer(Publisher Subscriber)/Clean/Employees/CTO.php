<?php

class CTO extends Employee implements Notifiable
{
    public function notify(string $message): void
    {
        echo "send $message to $this->name from earth and area and sea..." . PHP_EOL;
        // notify via email, sms, telegram, instagram, whatsapp, slack, post, call, ...
    }
}