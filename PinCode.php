<?php
class PinCode
{
    private string $pinCode;

    public function __construct(string $pinCode)
    {
        $this->pinCode = $pinCode;
    }


    public function getPin(): string
    {
        return $this->pinCode;
    }


    public function unlockPin(string $pinTotal): bool
    {
        $unlocked = false;

        if (strlen($pinTotal) === 4){
            unset($_SESSION['pin']);
            if($pinTotal === $this->getPin()) {
                $unlocked = true;
            }
        }
        return $unlocked;

    }
}