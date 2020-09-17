<?php

class  Car
{
    private string $carBrand;
    private int $maxFuel;
    private string $plateNumber;
    private string $pinCode;
    private float $fuelPer1km;


    public function __construct(string $carBrand, int $maxFuel, string $plateNumber, string $pinCode, float $fuelPer1km)
    {
        $this->carBrand = $carBrand;
        $this->maxFuel = $maxFuel;
        $this->plateNumber = $plateNumber;
        $this->pinCode = $pinCode;
        $this->fuelPer1km = $fuelPer1km;
    }

    public function getCarBrand(): string
    {
        return $this->carBrand;
    }

    public function getMaxFuel(): int
    {
        return $this->maxFuel;
    }

    public function getPlateNumber(): string
    {
        return $this->plateNumber;
    }

    public function getPinCode(): string
    {
        return $this->pinCode;
    }

    public function getFuelPer1km(): float
    {
        return $this->fuelPer1km;
    }

}

$cars = [
    new Car('Audi', 50, 'PN555', '111', 0.07),
    new Car('Volvo', 55, 'FN5896', '222', 0.09),
    new Car('BMW', 60, 'KV1234', 'xxx', 0.11)
];

echo 'Choose car from following list :', PHP_EOL;

foreach ($cars as $key => $car) {
    echo $car->getCarBrand() . ':' . ' Key for car :' . $key . ',' . ' Pin code :' . $car->getPinCode();
    echo PHP_EOL;
}

$key = (int)readline('Enter car`s key :');

$car = $cars[$key];

$selectPinCode = (string)readline('Enter pin code for car: ' . $car->getCarBrand());


$attempts = 0;
while ($selectPinCode != $car->getPinCode() && $attempts <= 2) {
    $selectPinCode = (string)readline('Enter pin code for car: ' . $car->getCarBrand());
    $attempts++;
    break;
}
if ($selectPinCode == $car->getPinCode()) {
    echo 'Correct';
    echo PHP_EOL;

}

$distance = 10;
$odometer = 0;

while ($car->getMaxFuel() >= 0 && $selectPinCode == $car->getPinCode()) {

    $odometer += 10;
    echo 'Distance :' . $distance . 'km, ';
    echo 'Odometer : ' . $odometer . 'km, ';
    echo 'Brand :' . $car->getCarBrand() . ', ';
    echo 'Plate number  ' . $car->getPlateNumber() . ' ';
    echo 'Fuel left : ' . ($car->getMaxFuel() - ($car->getFuelPer1km() * $odometer));
    echo PHP_EOL;

    sleep(1);
}
