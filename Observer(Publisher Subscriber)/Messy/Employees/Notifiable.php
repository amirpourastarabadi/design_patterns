<?php

interface Notifiable
{
    public function notify(string $message): void;
}
