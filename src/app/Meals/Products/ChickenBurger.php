<?php

namespace App\Meals\Products;

use App\Meals\Interfaces\Burger;
use App\Meals\Interfaces\Drink;

class ChickenBurger implements Burger {
    public function prepare(): string {
        return "🍗 Chicken Burger ready!";
    }
}
