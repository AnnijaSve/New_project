<?php

require_once 'Display.php';
require_once 'Game.php';


$display = new Display();

$game = new Game();

$table = $display->setCells();


foreach ($table as $key => $cells) {
    if (count($table) == 3) {
        echo PHP_EOL;
    }
    echo implode(" ", $cells), PHP_EOL;
}

while ($game->getWinsX($cells) == false || $game->getWinsO($cells) == false) {


    $x = readline("Player X Enter first number");
    $y = readline("Player X Enter second number");

    $stepX = $table[$x][$y];

    $game->addStepsX($stepX);

    $game->loadAllStepsX($stepX);

    $allStepsX = $game->getAllStepsX();

    $game->storeAllStepsX($allStepsX);

    $game->getAllStepsX();


    $a = readline("Player O Enter first number");
    $b = readline("Player O Enter second number");

    $stepO = $table[$a][$b];

    $game->addStepsO($stepO);

    $game->loadAllStepsO($stepO);

    $allStepsO = $game->getAllStepsO();

    $game->storeAllStepsO($allStepsO);

    $game->getAllStepsO();


    foreach ($table as $key => $cells) {
        if (count($table) == 3) {

            echo PHP_EOL;
        }

        $o = implode(" ", str_replace($game->getAllStepsX(), "  X ", $cells)) . PHP_EOL;
        echo str_ireplace($game->getAllStepsO(), "  0 ", $o);
    }

}

