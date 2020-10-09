<?php

class TieResult implements Result
{
    public function getMessage(): string
    {
        return 'Game is a tie';
    }
}