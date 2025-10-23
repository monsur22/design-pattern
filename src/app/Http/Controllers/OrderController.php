<?php

namespace App\Http\Controllers;

use App\Services\OrderCounter;
use Illuminate\Support\Facades\Cache;

class OrderController extends Controller
{
    protected $counter;

    public function __construct(OrderCounter $counter)
    {
        $this->counter = $counter;
    }

    public function placeOrder()
    {
        $count = $this->counter->increment();
        return "✅ Order #{$count} placed successfully!";
    }
}
