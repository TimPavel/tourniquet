<?php

class Passenger
{
    public $locationInside = false;
    public $wallet = 0;

    public function addMoneyToWallet($sum) {
        if ($sum < 1) {
            echo 'Sum to add must be more than 1';
            return false;
        }
        return $this->wallet += $sum;
    }

    public function showMoneyInWallet()
    {
        echo $this->wallet;
    }

    public function passTourniquet($direction, $tourniquet)
    {
        if ($direction == 'in' && $tourniquet->comeIn && !$this->locationInside) {
            $tourniquet->payPass($this);
        } elseif ($direction == 'out' && $tourniquet->comeOut && $this->locationInside) {
            $this->locationInside = false;
            echo 'user come out successfully';
        } else {
            echo "don't allow this direction - $direction . Direction must be 'in' or 'out'";
            return false;
        }
    }
}