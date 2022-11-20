<?php

interface Publisher
{
    public function subscribe(string $event, Notifiable $notifiable): void;

    public function unsubscribe(string $event, Notifiable $notifiable): void;
    
    public function notify(string $event, string $message): void;
}
