<?php

namespace App\Payments;
class StripePayment implements PaymentGatewayInterface
{
    public function pay(float $amount): string
    {
        return "Paid $amount BDT via Stripe ✅";
    }
}
