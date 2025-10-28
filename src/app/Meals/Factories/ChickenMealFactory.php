<?php

namespace App\Meals\Factories;

use App\Meals\Products\ChickenBurger;
use App\Meals\Products\BeefBurger;
use App\Meals\Products\Coke;
use App\Meals\Products\Pepsi;

class ChickenMealFactory implements MealFactory {
    public function createBurger(): ChickenBurger {
        return new ChickenBurger();
    }

    public function createDrink(): Coke {
        return new Coke();
    }
}

