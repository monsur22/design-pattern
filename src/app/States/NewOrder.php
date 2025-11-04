<?php

namespace App\States;

class NewOrder implements OrderState {
    public function proceed(): OrderState {
        return new ShippedOrder();
    }
    public function status(): string {
        return "🧾 Order is being processed.";
    }
}

