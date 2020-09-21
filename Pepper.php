<?php

namespace App\Spices;

use App\Spice;

class Pepper extends Spice
{


    public function getTaste(): string
    {
        return "spiced";
    }
}