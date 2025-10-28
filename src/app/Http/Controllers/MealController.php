<?php

namespace App\Http\Controllers;

use App\Meals\Factories\ChickenMealFactory;
use App\Meals\Factories\BeefMealFactory;

class MealController extends Controller
{
    public function order($type)
    {
        $factory = match($type) {
            'chicken' => new ChickenMealFactory(),
            'beef' => new BeefMealFactory(),
            default => throw new \Exception("Meal not found")
        };

        $burger = $factory->createBurger();
        $drink = $factory->createDrink();

        return $burger->prepare() . " + " . $drink->serve();
    }
}
