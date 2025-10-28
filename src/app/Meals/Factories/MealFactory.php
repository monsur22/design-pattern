<?php

namespace App\Meals\Factories;

use App\Meals\Interfaces\Burger;
use App\Meals\Interfaces\Drink;

interface MealFactory {
    public function createBurger(): Burger;
    public function createDrink(): Drink;
}
