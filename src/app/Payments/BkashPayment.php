<?php

namespace App\Payments;

class BkashPayment implements PaymentGatewayInterface
{
    public function pay(float $amount): string
    {
        return "Paid $amount BDT via bKash ✅";
    }
}
