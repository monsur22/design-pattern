<?php

namespace App\Factories;

use App\Payments\BkashPayment;
use App\Payments\NagadPayment;
use App\Payments\StripePayment;
use App\Payments\PaymentGatewayInterface;

class PaymentFactory
{
    public static function make(string $type): PaymentGatewayInterface
    {
        return match ($type) {
            'bkash' => new BkashPayment(),
            'nagad' => new NagadPayment(),
            'stripe' => new StripePayment(),
            default => throw new \Exception("Invalid payment type"),
        };
    }
}
