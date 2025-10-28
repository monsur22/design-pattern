<?php

namespace App\Http\Controllers;

use App\Builders\BurgerBuilder;
use App\Prototypes\Burger;

class BurgerController extends Controller
{
    public function cloneBurger()
    {
        // Base prototype
        $chickenBurger = new Burger('Chicken', true, 'Mayo');

        // Clone the prototype
        $spicyBurger = clone $chickenBurger;
        $spicyBurger->sauce = 'Spicy BBQ';

        $sweetBurger = clone $chickenBurger;
        $sweetBurger->sauce = 'Sweet Chili';

        return [
            'original' => $chickenBurger->describe(),
            'spicy' => $spicyBurger->describe(),
            'sweet' => $sweetBurger->describe(),
        ];
    }
}

