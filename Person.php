<?php


class Person
{
    private string $name;
    private string $surname;
    private int $phoneNumber;


    public function __construct(string $name, string $surname, int $phoneNumber)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->phoneNumber = $phoneNumber;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
}
