<?php

class Display
{


    public function setCells(): array
    {
        $this->cells = array(
            array(' 00 ', ' 01 ', ' 02 '),
            array(' 10 ', ' 11 ', ' 12 '),
            array(' 20 ', ' 21 ', ' 22 '),
        );

        return $this->cells;

    }
}
