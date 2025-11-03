<?php
namespace App\Listeners;

use Illuminate\Support\Facades\Log;

class UpdateStock
{
    public function handle($event)
    {
        Log::info("📦 Stock updated for Order #{$event->orderId}");
    }
}
