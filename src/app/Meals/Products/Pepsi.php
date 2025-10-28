<?php

namespace App\Meals\Products;

use App\Meals\Interfaces\Burger;
use App\Meals\Interfaces\Drink;

class Pepsi implements Drink {
    public function serve(): string {
        return "🥤 Serving Pepsi";
    }
}
