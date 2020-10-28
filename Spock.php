<?php

class Spock extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Rock::class,
        Scissors::class
    ];
}