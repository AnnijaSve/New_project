<?php

class NumberGenerator
{
    private StorageInterface $storage;

    private array $numbers;
    private int $min;
    private int $max;


    public function __construct(StorageInterface $storage, int $min, int $max)
    {
        $this->storage = $storage;
        $this->min = $min;
        $this->max = $max;
        $this->numbers = $storage->load();
    }

    public function getNumber(): int
    {
        return rand($this->min, $this->max);
    }

    public function add(int $numbers): void
    {
        $this->numbers[] = $numbers;

    }

    public function getAllNumbers(): array
    {
        return array_filter($this->numbers);

    }

    public function getAverage(): float
    {
        return round(array_sum($this->getAllNumbers()) / count($this->getAllNumbers()), 2);

    }

    public function save(): void
    {
        $this->storage->store($this->getAllNumbers());
    }


}
