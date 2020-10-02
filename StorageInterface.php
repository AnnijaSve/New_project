<?php

interface StorageInterface
{
    public function store(array $numbers): void;
    public function load():array;
}
