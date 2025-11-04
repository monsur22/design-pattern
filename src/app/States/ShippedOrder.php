<?php

namespace App\States;

class ShippedOrder implements OrderState {
    public function proceed(): OrderState {
        return new DeliveredOrder();
    }
    public function status(): string {
        return "🚚 Order shipped to customer.";
    }
}

