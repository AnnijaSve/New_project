<?php
class Player
{
    private string $playerX;
    private string $playerO;

    public function __construct(string $playerX, string $playerO)
    {
        $this->playerX = $playerX;
        $this->playerO = $playerO;
    }


}
