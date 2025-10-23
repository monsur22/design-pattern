<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

class OrderCounter
{
    private $count = 0;

    public function __construct() {

    }

    public function increment()
    {
        $count = Cache::increment('order_counter', 1);
        if (!$count) {
            Cache::put('order_counter', 1);
            $count = 1;
        }
        return $count;
    }
}
