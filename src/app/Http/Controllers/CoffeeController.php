<?php

namespace App\Http\Controllers;

use App\Services\Coffee\{BasicCoffee, MilkDecorator, SugarDecorator};

class CoffeeController extends Controller
{
    public function index()
    {
        // ☕ Apply decorators dynamically
        $coffee = new SugarDecorator(
            new MilkDecorator(
                new BasicCoffee()
            )
        );

        return response()->json([
            'message' => '☕ Your coffee is ready!',
            'price' => $coffee->cost()
        ]);
    }
}
