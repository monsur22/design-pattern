<?php

namespace App\Services\Coffee;

class MilkDecorator extends CoffeeDecorator {
    public function cost() {
        return parent::cost() + 10;
    }
}


