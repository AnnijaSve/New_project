<?php

class Computer
{
    private Rock $rock;
    private Scissors $scissors;
    private Paper $paper;
    private Lizard $lizard;
    private Spock $spock;

    public function __construct(Rock $rock, Scissors $scissors, Paper $paper, Lizard $lizard, Spock $spock)
    {
        $this->rock = $rock;
        $this->scissors = $scissors;
        $this->paper = $paper;
        $this->lizard = $lizard;
        $this->spock = $spock;
    }

    public function getRand($paper, $rock, $scissors, $lizard, $spock): ElementInterface
    {
        $pc = rand(0, 4);
        if ($pc == '0') {
            return $paper;
        } elseif ($pc == '1') {
            return $rock;
        } elseif ($pc == '2') {
            return $lizard;
        } elseif ($pc == '3') {
            return $spock;
        } else {
            return $scissors;
        }
    }
}