<?php

class LogPublisher implements Publisher
{
    private array $listeners = [];

    public function subscribe(string $event, Notifiable $notifiable): void
    {
        $this->listeners[$event][] = $notifiable;
    }

    public function unsubscribe(string $event, Notifiable $notifiable): void
    {
        $index = $this->getIndex($event, $notifiable);

        unset($this->listeners[$event][$index]);
    }

    public function notify(string $event, string $message): void
    {
        foreach ($this->listeners[$event] as $notifiable) {
            $notifiable->notify($message);
        }
    }

    private function getIndex(string $event, Notifiable $notifiable)
    {
        foreach($this->listeners[$event] as $key => $value){
            if(current((array)$notifiable) === current((array)$value)){
                return $key;
            }
        }        

        throw new Exception('This notifiable not exists.');
    }
}
