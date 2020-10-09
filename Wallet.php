<?php

class Wallet implements InterfaceWallet
{
    public string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function putInWallet(int $personWallet): void
    {
        file_put_contents($this->path, $personWallet);
    }

    public function loadWallet(): int
    {
        return (int)file_get_contents($this->path);
    }

}