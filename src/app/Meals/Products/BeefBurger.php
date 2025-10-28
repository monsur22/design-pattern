<?php

namespace App\Meals\Products;

use App\Meals\Interfaces\Burger;
use App\Meals\Interfaces\Drink;



class BeefBurger implements Burger {
    public function prepare(): string {
        return "🥩 Beef Burger ready!";
    }
}

