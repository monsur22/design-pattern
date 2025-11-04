<?php

namespace App\States;

class DeliveredOrder implements OrderState {
    public function proceed(): OrderState {
        return $this; // No next state
    }
    public function status(): string {
        return "📦 Order delivered successfully!";
    }
}

