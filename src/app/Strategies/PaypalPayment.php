<?php
// app/Strategies/PaypalPayment.php
namespace App\Strategies;

class PaypalPayment implements PaymentStrategy {
    public function pay($amount) {
        return "💳 Paying $amount via PayPal";
    }
}

