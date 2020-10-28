<?php


require_once 'ElementInterface.php';
require_once 'AbstractElement.php';
require_once './Results/Result.php';
require_once './Results/LoseResult.php';
require_once './Results/WinResult.php';
require_once './Results/TieResult.php';
require_once 'Paper.php';
require_once 'Rock.php';
require_once 'Scissors.php';
require_once 'Lizard.php';
require_once 'Spock.php';
require_once 'Computer.php';


$paper = new Paper();
$rock = new Rock();
$scissors = new Scissors();
$lizard = new Lizard();
$spock = new Spock();
$computer = new Computer($rock, $scissors, $paper, $lizard, $spock);

$computerRand= $computer->getRand($paper, $rock, $scissors, $lizard, $spock);
$myChoice = $_GET['myChoice'];

?>
<!DOCTYPE html>
<html>
<head>

    <?php require_once "index.php"; ?>
</head>
<style>
    button.b1 {
        font-size: 20px;
        background-color:#4dff4d;
    }
</style>
<body>
<div class="container">
    <center> <h1>
            <?php
            switch ($myChoice) {
                case('$scissors'):
                    $result = $scissors->beats($computerRand);
                    echo 'You : ' . $result->getMessage();
                    break;
                case('$rock'):
                    $result = $rock->beats($computerRand);
                    echo 'You : ' . $result->getMessage();
                    break;
                case('$paper'):
                    $result = $paper->beats($computerRand);
                    echo 'You : ' . $result->getMessage();
                    break;
                case('$lizard'):
                    $result = $lizard->beats($computerRand);
                    echo 'You : ' . $result->getMessage();
                    break;
                case('$spock'):
                    $result = $spock->beats($computerRand);
                    echo 'You : ' . $result->getMessage();
                    break;
            }
            ?>
        </h1>
    </center>

    <center>
    <h2 style="background-color:#b3ffb3;">
        <?php
        switch ($computerRand){
            case($scissors):
                echo 'Computer choice : scissors';
                break;
            case($paper):
                echo 'Computer choice : paper';
                break;
            case($rock):
                echo 'Computer choice : rock';
                break;
            case($lizard):
                echo 'Computer choice :lizard';
                break;
            case($spock):
                echo 'Computer choice : spock';
                break;
        }
        ?>
    </h2>
    </center>

    <h2><center> VS </center></h2>

<center>
    <h2 style="background-color:#b3ffb3;">

        <?php
        switch ($myChoice){
            case('$scissors'):
                echo 'Your choice : scissors';
                echo PHP_EOL;
                break;
            case('$paper'):
                echo 'Your choice : paper';
                echo PHP_EOL;
                break;
            case('$rock'):
                echo 'Your choice :  rock';
                echo PHP_EOL;
                break;
            case('$lizard'):
                echo 'Your choice : lizard';
                echo PHP_EOL;
                break;
            case('$spock'):
                echo 'Your choice : spock';
                echo PHP_EOL;
                break;
        }
        ?>
    </h2>
</center>

<h1>

    <center>
        <form method="get">
            <button class="b1" value=$rock name="myChoice">Rock</button>
            <button class="b1" value=$paper name="myChoice">Paper</button>
            <button class="b1" value=$scissors name="myChoice">Scissors</button>
            <button class="b1" value=$lizard name="myChoice">Lizard</button>
            <button class="b1" value=$spock name="myChoice">Spock</button>
        </form>
    </center>

</h1>
    <pre>
</pre>
</div>
</body>
</html>

