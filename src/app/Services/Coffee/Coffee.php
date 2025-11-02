<?php

namespace App\Services\Coffee;

interface Coffee {
    public function cost();
}

class BasicCoffee implements Coffee {
    public function cost() {
        return 50;
    }
}
