<?php

// app/Strategies/PaymentStrategy.php
namespace App\Strategies;

interface PaymentStrategy {
    public function pay($amount);
}

