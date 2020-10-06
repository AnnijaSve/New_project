<?php

class Product
{
    var int $key;
    var string $name;
    var int $price;
    var int $amount;

    public function __construct(int $key, string $name, int $price, int $amount)
    {
        $this->key = $key;
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function getKey(): int
    {
        return $this->key;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function removeAmount(int $amount): int
    {
        return $this->amount -= $amount;
    }
}