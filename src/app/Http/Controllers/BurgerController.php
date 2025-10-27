<?php

namespace App\Http\Controllers;

use App\Builders\BurgerBuilder;

class BurgerController extends Controller
{
    public function makeBurger()
    {
        $builder = new BurgerBuilder();

        $burger = $builder
            ->addPatty('beef')
            ->addCheese()
            ->addLettuce()
            ->addSauce('BBQ')
            ->build();

        return $burger->describe();
    }
}

