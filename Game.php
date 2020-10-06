<?php

class Game
{
    private array $stepX;
    private array $stepO;

    public function getWinsX($cells): void
    {
        if ($cells[0][0] == 'X' && $cells[0][1] == 'X' && $cells[0][2] == 'X'
            || $cells[1][0] == 'X' && $cells[1][1] == 'X' && $cells[1][2] == 'X'
            || $cells[2][0] == 'X' && $cells[2][1] == 'X' && $cells[2][2] == 'X'
            || $cells[0][0] == 'X' && $cells[1][1] == 'X' && $cells[2][2] == 'X'
            || $cells[0][2] == 'X' && $cells[1][1] == 'X' && $cells[2][0] == 'X'
        ) {
            echo "Wins X";
        }

    }

    public function getWinsO($cells): void
    {
        if ($cells[0][0] == 'O' && $cells[0][1] == 'O' && $cells[0][2] == 'O'
            || $cells[1][0] == 'O' && $cells[1][1] == 'O' && $cells[1][2] == 'O'
            || $cells[2][0] == 'O' && $cells[2][1] == 'O' && $cells[2][2] == 'O'
            || $cells[0][0] == 'O' && $cells[1][1] == 'O' && $cells[2][2] == 'O'
            || $cells[0][2] == 'O' && $cells[1][1] == 'O' && $cells[2][0] == 'O'
        ) {
            echo "Wins O";
        }

    }

    public function addStepsX(string $stepX): void
    {
        $this->stepX[] = $stepX;

    }

    public function getAllStepsX(): array
    {
        return $this->stepX;
    }

    public function storeAllStepsX(array $stepX): void
    {

        file_put_contents('./StepsX.txt', implode(' ', $stepX));
    }

    public function loadAllStepsX($stepX): array
    {
        return (array)explode(' ', file_get_contents('./StepsX.txt'));


    }

    public function addStepsO(string $stepO): void
    {
        $this->stepO[] = $stepO;

    }

    public function getAllStepsO(): array
    {
        return $this->stepO;
    }

    public function storeAllStepsO(array $stepO): void
    {

        file_put_contents('./StepsO.txt', implode(' ', $stepO));
    }

    public function loadAllStepsO($stepO): array
    {
        return (array)explode(' ', file_get_contents('./StepsO.txt'));

    }


}
