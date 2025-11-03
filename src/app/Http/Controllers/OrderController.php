<?php

// app/Http/Controllers/OrderController.php
namespace App\Http\Controllers;

use App\Events\OrderPlaced;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $orderId = rand(1000, 9999);

        event(new OrderPlaced($orderId));

        return response()->json([
            'message' => '✅ Order placed',
            'order_id' => $orderId,
        ]);
    }
}
