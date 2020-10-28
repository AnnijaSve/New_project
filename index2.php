<?php
namespace App;

require_once 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;

$uuid1 = Uuid::uuid1();
echo $uuid1->toString();
