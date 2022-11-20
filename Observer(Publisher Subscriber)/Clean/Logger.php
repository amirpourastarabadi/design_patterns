<?php

class Logger
{

    private LogPublisher $logPublisher;

    public function __construct()
    {
        $this->logPublisher = new LogPublisher();
    }

    public function subscribe(string $event, Notifiable $notifiable)
    {
        $this->logPublisher->subscribe($event, $notifiable);
    }


    public function unsubscribe(string $event, Notifiable $notifiable)
    {
        $this->logPublisher->unsubscribe($event, $notifiable);
    }

    public function log(string $level, string $message, array $data = [])
    {
        // log $message and $data to file, elastic, database or ...
        echo "log : $message" . PHP_EOL;
        $this->logPublisher->notify($level, $message);
    }
}
