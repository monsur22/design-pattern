<?php

namespace App\Meals\Factories;

use App\Meals\Products\ChickenBurger;
use App\Meals\Products\BeefBurger;
use App\Meals\Products\Coke;
use App\Meals\Products\Pepsi;

class BeefMealFactory implements MealFactory {
    public function createBurger(): BeefBurger {
        return new BeefBurger();
    }

    public function createDrink(): Pepsi {
        return new Pepsi();
    }
}
