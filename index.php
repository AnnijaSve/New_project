<?php
require_once 'StorageInterface.php';
require_once 'NumberGenerator.php';
require_once 'StoreNumbers.php';



$storeNumbers = new StoreNumbers('Storage.txt');

$numberGenerator = new NumberGenerator($storeNumbers, 1,100);

$randomNumber = $numberGenerator->getNumber();

$numberGenerator->add($randomNumber);

$allNumbers = $numberGenerator->getAllNumbers();

$numberGenerator->save();


echo 'All numbers : ' . implode(' ', $numberGenerator->getAllNumbers());
echo PHP_EOL;
echo 'New number : ' . $randomNumber;
echo PHP_EOL;
echo 'Average : ' . $numberGenerator->getAverage();
echo PHP_EOL;



