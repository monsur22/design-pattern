<?php

// app/Services/PaymentContext.php
namespace App\Services;

use App\Strategies\PaymentStrategy;

class PaymentContext {
    public function __construct(private PaymentStrategy $strategy) {}

    public function checkout($amount) {
        return $this->strategy->pay($amount);
    }
}

