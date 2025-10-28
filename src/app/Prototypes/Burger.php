<?php

namespace App\Prototypes;

class Burger
{
    public $type;
    public $cheese;
    public $sauce;

    public function __construct($type, $cheese, $sauce)
    {
        $this->type = $type;
        $this->cheese = $cheese;
        $this->sauce = $sauce;
    }

    public function __clone()
    {
        // Custom clone logic if needed
    }

    public function describe()
    {
        return "🍔 {$this->type} Burger with " .
            ($this->cheese ? "cheese" : "no cheese") .
            " and {$this->sauce} sauce!";
    }
}
