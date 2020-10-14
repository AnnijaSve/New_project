<?php

class TaskStorage
{
    private $resources;
    private array $tasks = [];

    public function __construct()
    {
        $this->resources = fopen('Task.csv', 'rw+');
        $this->loadTasks();
    }

    public function addTask($tasks): void
    {
        $this->tasks[] = $tasks;
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

    public function saveTask(): void
    {
        fputcsv($this->resources, $this->tasks);
    }

    public function loadTasks(): void
    {
        while (!feof($this->resources)) {

            $tasks = (array)fgetcsv($this->resources);

        }
    }

    public function loadALl(): array
    {
        $todoFile = fopen('Task.csv', 'rw+');
        $todos = [];
        while (!feof($todoFile)) {

            $todoData = (array)fgetcsv($todoFile);
            $todos[] = $todoData[0];

        }
        return $todos;

    }

}