<?php
$products = array (
    array("Chocolate",3,2),
    array("Milk",2,3),
    array("Bred",1,4),
);
echo $products[0][0].": Price EUR: ".$products[0][1].", stock: ".$products[0][2] , PHP_EOL;
echo $products[1][0].": Price EUR: ".$products[1][1].", stock: ".$products[1][2] , PHP_EOL;
echo $products[2][0].": Price EUR: ".$products[2][1].", stock: ".$products[2][2] , PHP_EOL;

while ($products[0][2]>= 0 || $products[1][2]>= 0 || $products[2][2] >= 0 ) {
    $a = readline('Chose Your product : ');

    if ($a == "Chocolate") {
        ($products[0][2] -= 1);
    } elseif ($a == "Milk") {
        ($products[1][2] -= 1);
    } elseif ($a == "Bred") {
        ($products[2][2] -= 1);
    }


    echo $products[0][0] . ": Price EUR: " . $products[0][1] . ", stock: " . $products[0][2], PHP_EOL;
    echo $products[1][0] . ": Price EUR: " . $products[1][1] . ", stock: " . $products[1][2], PHP_EOL;
    echo $products[2][0] . ": Price EUR: " . $products[2][1] . ", stock: " . $products[2][2], PHP_EOL;

    if ($products[0][2] == 0) {
        echo "There is no Chocolate anymore";
        break;
    }
    if ($products[1][2] == 0) {
        echo "There is no Milk anymore";
        break;
    }
    if ($products[1][2] == 0) {
        echo "There is no Bred anymore";
        break;
    }



}