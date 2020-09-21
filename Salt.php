<?php

namespace App\Spices;

use App\Spice;

class Salt extends Spice
{
    public function getTaste(): string
    {
        return "salty";
    }
}
