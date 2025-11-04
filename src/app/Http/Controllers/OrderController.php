<?php

namespace App\Http\Controllers;

use App\Models\OrderContext;

class OrderController extends Controller
{
    public function stateFlow()
    {
        $order = new OrderContext();

        $logs = [];
        $logs[] = $order->getStatus();
        $order->nextState();

        $logs[] = $order->getStatus();
        $order->nextState();

        $logs[] = $order->getStatus();

        return response()->json($logs);
    }
}

