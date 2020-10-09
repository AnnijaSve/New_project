<?php

class Person
{
    private InterfaceWallet $storeWallet;
    var string $name;
    var int $wallet;

    public function __construct(InterfaceWallet $storeWallet, string $name)
    {
        $this->storeWallet = $storeWallet;
        $this->name = $name;
        $this->wallet = $storeWallet->loadWallet();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getWallet(): int
    {
        return $this->wallet;
    }

    public function removeWallet($productPrice): int
    {
        return $this->wallet -= $productPrice;
    }
}
