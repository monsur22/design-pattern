<?php

namespace App\Meals\Products;

use App\Meals\Interfaces\Burger;
use App\Meals\Interfaces\Drink;

class Coke implements Drink {
    public function serve(): string {
        return "🥤 Serving Coke";
    }
}

