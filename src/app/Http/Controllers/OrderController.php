<?php

namespace App\Http\Controllers;

use App\Services\Order\OrderFacade;

class OrderController extends Controller
{
    protected OrderFacade $orderFacade;

    public function __construct(OrderFacade $orderFacade)
    {
        $this->orderFacade = $orderFacade;
    }

    public function place()
    {
        $result = $this->orderFacade->placeOrder();

        return response()->json([
            'message' => '✅ Order processed successfully!',
            'details' => $result
        ]);
    }
}
