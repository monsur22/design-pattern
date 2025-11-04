<?php

// app/Strategies/StripePayment.php
namespace App\Strategies;

class StripePayment implements PaymentStrategy {
    public function pay($amount) {
        return "💰 Paying $amount via Stripe";
    }
}
