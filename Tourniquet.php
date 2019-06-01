<?php


abstract class Tourniquet
{

    public $priceOfPassageIn = 30;
    public $comeIn = true;
    public $comeOut = true;

    public function payPass($user)
    {
        if($this->isEnoughSumInWallet($user->wallet)) {
            $user->wallet -= $this->priceOfPassageIn;
            $user->locationInside = true;
            echo 'user come in successfully';

		} else {
            echo "forbid to pass, don't enough money. You have " . $user->wallet . ", need " . $this->priceOfPassageIn;
            exit();
        }
    }

    public function isEnoughSumInWallet($wallet)
    {
        return $wallet >= $this->priceOfPassageIn;
    }

}


