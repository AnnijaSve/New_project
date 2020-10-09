<?php

require_once 'InterfaceWallet.php';
require_once 'CartInterface.php';
require_once 'Product.php';
require_once 'Store.php';
require_once 'ProductFormatter.php';
require_once 'Person.php';
require_once 'Cart.php';
require_once 'Wallet.php';


$cart = new Cart('Cart.txt');

$storeWallet = new Wallet('Wallet.txt');

$store = new Store('Mego', [
    new Product(0, 'Chocolate', 200, 5),
    new Product(1, 'Milk', 100, 2),
    new Product(2, 'Water', 50, 3)
]);

$person = new Person($storeWallet, 'Annija');

echo $person->getName() . ' wallet: ' . ProductFormatter::price($person->getWallet()), PHP_EOL;


while ($person->getWallet() >= 0) {

    foreach ($store->getAllProducts() as $product) {
        /** @var Product $product */
        echo 'Product number: ' . $product->getKey() . ' ';
        echo ', Product :' . $product->getName() . ' ';
        echo ProductFormatter::price($product->getPrice()) . ' ';
        echo ProductFormatter::amount($product->getAmount()) . ' ';
        echo PHP_EOL;
    }


    $selectProduct = (int)readline('Select product number: ');
    $product = $store->getAllProducts()[$selectProduct];


    $amount = 1;

    if ($product->getAmount() == 0) {
        echo 'Chose other product ! ', PHP_EOL;
    } else {
        $product->removeAmount($amount);
    }


    if ($person->getWallet() >= $product->getPrice() && $product->getAmount() > 0) {
        echo 'Added to Your cart !', PHP_EOL;

        $productPrice = $product->getPrice();

        $person->removeWallet($productPrice);

        $personWallet = $person->getWallet();

        $storeWallet->putInWallet($personWallet);

        $addProduct = json_decode(json_encode($product), true);

        $store->addMyProducts($addProduct);

        $choosedProducts = $store->getAllMyProducts();

        $cart->putInCart($choosedProducts);

    } elseif ($person->getWallet() >= $product->getPrice() && $product->getAmount() == 0) {
        continue;
    } else {
        echo 'Not enough money !', PHP_EOL;
        exit();
    }

    $moreProducts = (string)readline('Add more products ? Type:(y) for yes or type (e) for exit ');
    if ($moreProducts == 'y') {
        continue;
    } else {
        echo 'Money in Your wallet: ' . ProductFormatter::price($storeWallet->loadWallet());
        echo PHP_EOL;
        echo 'You bought these products: ' . implode(' ', $cart->loadCart());
        exit();
    }
}