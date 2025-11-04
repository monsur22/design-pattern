<?php

namespace App\Models;

use App\States\OrderState;
use App\States\NewOrder;

class OrderContext {
    private OrderState $state;

    public function __construct(OrderState $state = new NewOrder()) {
        $this->state = $state;
    }

    public function nextState(): void {
        $this->state = $this->state->proceed();
    }

    public function getStatus(): string {
        return $this->state->status();
    }
}
