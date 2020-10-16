<?php

class Message
{
    private string $name;
    private string $message;

    public function __construct(string $name, string $message)
    {
        $this->name = $name;
        $this->message = $message;
    }

}