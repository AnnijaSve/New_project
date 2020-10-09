<?php

interface CartInterface
{
    public function putInCart(array $choosedProduct): void;

    public function loadCart(): array;
}