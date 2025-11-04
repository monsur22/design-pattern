<?php

// app/Http/Controllers/PaymentController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentContext;
use App\Strategies\StripePayment;
use App\Strategies\PaypalPayment;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $gateway = $request->input('gateway', 'stripe');
        $amount = $request->input('amount', 100);

        $strategy = match ($gateway) {
            'paypal' => new PaypalPayment(),
            default => new StripePayment(),
        };

        $context = new PaymentContext($strategy);
        return response()->json([
            'message' => $context->checkout($amount)
        ]);
    }
}
