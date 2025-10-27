<?php

namespace App\Builders;

class BurgerBuilder
{
    protected $burger;

    public function __construct()
    {
        $this->burger = new Burger();
    }

    public function addPatty(string $type)
    {
        $this->burger->patty = $type;
        return $this;
    }

    public function addCheese()
    {
        $this->burger->cheese = true;
        return $this;
    }

    public function addLettuce()
    {
        $this->burger->lettuce = true;
        return $this;
    }

    public function addSauce(string $sauce)
    {
        $this->burger->sauce = $sauce;
        return $this;
    }

    public function build()
    {
        return $this->burger;
    }
}
