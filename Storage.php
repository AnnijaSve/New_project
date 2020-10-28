<?php


class Storage
{
    private $resources;
    private array $likes = [];

    public function __construct()
    {
        $this->resources = fopen('Like.csv', 'rw+');
        $this->loadLikes();
    }

    public function addLike(string $likes): void
    {
        $this->likes[] = $likes;
    }

    public function getLikes(): array
    {
        return $this->likes;
    }

    public function saveLikes(): void
    {
        fputcsv($this->resources, $this->likes);
    }

    public function loadLikes(): void
    {
        while (!feof($this->resources)) {

            $likes = (array)fgetcsv($this->resources);

        }
    }

    public function loadALl(): array
    {
        $myFile = fopen('Like.csv', 'rw+');
        $likes = [];
        while (!feof($myFile)) {

            $likesData = (array)fgetcsv($myFile);
            $likes[] = $likesData[0];

        }
        return $likes;

    }


}