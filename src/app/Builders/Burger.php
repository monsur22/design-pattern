<?php

namespace App\Builders;

class Burger
{
    public $patty;
    public $cheese = false;
    public $lettuce = false;
    public $sauce = null;

    public function describe()
    {
        return "🍔 Burger with {$this->patty}" .
            ($this->cheese ? ", cheese" : "") .
            ($this->lettuce ? ", lettuce" : "") .
            ($this->sauce ? ", sauce: {$this->sauce}" : "") . " ready!";
    }
}
