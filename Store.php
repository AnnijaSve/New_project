<?php

class Store
{
    private CartInterface $cart;
    private string $name;
    var array $products = [];
    var array $choosedProducts = [];

    public function __construct(string $name, array $products = [])
    {
        $this->name = $name;
        $this->setProducts($products);
    }

    public function addProducts($product): void
    {
        $this->products[] = $product;
    }

    public function setProducts(array $products): void
    {
        foreach ($products as $product) {
            $this->addProducts($product);
        }
    }

    public function getAllProducts(): array
    {
        return $this->products;
    }

    public function addMyProducts(array $choosedProducts): void
    {
        foreach ($choosedProducts as $choosedProduct)
            if (is_string($choosedProduct)) {

                $this->choosedProducts[] = $choosedProduct;
            }
    }

    public function getAllMyProducts(): array
    {
        return $this->choosedProducts;

    }
}
