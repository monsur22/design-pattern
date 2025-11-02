<?php

namespace App\Services\Coffee;

class CoffeeDecorator implements Coffee {
    protected $coffee;
    public function __construct( Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function cost() {
        return $this->coffee->cost();
    }
}

