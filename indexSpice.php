<?php

require_once __DIR__.'/app/Spice.php';
require_once __DIR__ .'/app/SpiceCollection.php';

foreach (glob('app/Spices/*.php') as $filename){
    require_once $filename;
}

//require_once 'app/Spice.php';
//require_once 'app/SpiceCollection.php';
//require_once 'app/Spices/Pepper.php';
//require_once 'app/Spices/Salt.php';
//require_once 'app/Spices/Oregano.php';

use App\Spice;
use App\SpiceCollection;
use App\Spices\Pepper;
use App\Spices\Salt;
use App\Spices\Oregano;


$spices = new SpiceCollection();
$spices->add(new Salt());
$spices->add(new Pepper());
$spices->add(new Oregano());
foreach ($spices->all() as $spice) {
    /** @var Spice $spice */
    echo $spice->getName() . ' ' . $spice->getTaste() . PHP_EOL;
}


