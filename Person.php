<?php


class Person
{
    private string $name;
    private int $pin;


    public function __construct(string $name, int $pin)
    {
        $this->name = $name;
        $this->pin = $pin;
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getPin(): string
    {
        return $this->pin;
    }
}
