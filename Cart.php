<?php

class Cart implements CartInterface
{
    public string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function putInCart(array $choosedProduct): void
    {
        file_put_contents($this->path, implode(' ', $choosedProduct));
    }

    public function loadCart(): array
    {

        $contents = file_get_contents($this->path);
        $rows = array_filter((array)explode(' ', $contents));
        $products = [];
        foreach ($rows as $row) {
            $products[] = $row . PHP_EOL;
        }
        return $products;
    }
}