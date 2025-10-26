<?php

namespace App\Http\Controllers;

use App\Factories\PaymentFactory;

class PaymentController extends Controller
{
    public function pay($type)
    {
        $payment = PaymentFactory::make($type);
        return $payment->pay(1000);
    }
}
