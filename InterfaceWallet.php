<?php

interface InterfaceWallet
{
    public function putInWallet(int $personWallet): void;

    public function loadWallet(): int;
}