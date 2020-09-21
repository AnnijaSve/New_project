<?php

namespace App;

abstract class Spice

{

    public abstract function getTaste(): string;

    public function getName(): string
    {
        return get_class($this);
    }
}

