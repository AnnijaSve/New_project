<?php

namespace App\Spice;

abstract class Spice

{

    public abstract function getTaste(): string;


    public function getName(): string
    {
        return get_class($this);
    }
}
class Salt extends Spice
{
public function getTaste(): string
{
    return "salty";
}
}

class Pepper extends Spice
{


    public function getTaste(): string
    {
        return"spiced";
    }
}

class SpiceCollection
{
    private $spices = [];

    public function add(Spice $spice): void
    {
        $this->spices[] = $spice;
    }

    public function all(): array
    {
        return $this->spices;
    }
}



