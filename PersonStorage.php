<?php


class PersonStorage
{
    private $resources;
    private array $persons;

    public function __construct()
    {
        $this->resources = fopen('Person.csv', 'rw+');
        $this->loadPersons();
    }

    private function loadPersons(): void
    {
        while (!feof($this->resources)) {

            $personsData = (array)fgetcsv($this->resources);
            $this->persons[] = new Person(
                (string)$personsData[0],
                (int)$personsData[1]
            );
        }
    }

    public function getByCode(string $searchForPerson): Person
    {
        foreach ($this->persons as $person) {
            /** @var Person $person */
            if ($person->getPin() === $searchForPerson) {
                return $person;
            }
        }
        return $person;
    }


}
