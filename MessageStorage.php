<?php

class MessageStorage
{
    private $resources;
    private array $messages;

    public function __construct()
    {
        $this->resources = fopen('Message.csv', 'rw+');
        $this->loadPersons();
    }

    public function saveMessage($message): void
    {
        fputcsv($this->resources, $message);
    }

    private function loadPersons(): void
    {
        while (!feof($this->resources)) {

            $personsData = (array)fgetcsv($this->resources);
            $this->messages[] = new Message(
                (string)$personsData[0],
                (string)$personsData[1],

            );
        }
    }

}