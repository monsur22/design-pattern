<?php

namespace App\Payments;

class NagadPayment implements PaymentGatewayInterface
{
    public function pay(float $amount): string
    {
        return "Paid $amount BDT via Nagad ✅";
    }
}
