<?php

namespace App\Services\Coffee;

class BasicCoffee implements Coffee {
    public function cost() {
        return 50;
    }
}
