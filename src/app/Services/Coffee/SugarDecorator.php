<?php

namespace App\Services\Coffee;



class SugarDecorator extends CoffeeDecorator {
    public function cost() {
        return parent::cost() + 5;
    }
}
