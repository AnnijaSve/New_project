<?php


require_once 'app/Spice.php';

use App\Spice\Pepper;
use App\Spice\Salt;
use App\Spice\Spice;
use App\Spice\SpiceCollection;

$spices = new SpiceCollection();
$spices->add(new Salt());
$spices->add(new Pepper());
foreach ($spices->all() as $spice) {
    /** @var Spice $spice */
    echo $spice->getName() . ' ' . $spice->getTaste() . PHP_EOL;
}
