<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;

class OrderPlaced
{
    use Dispatchable;

    public $orderId;

    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }
}

