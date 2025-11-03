<?php
namespace App\Listeners;

use Illuminate\Support\Facades\Log;

class AddRewardPoints
{
    public function handle($event)
    {
        Log::info("🎁 Reward points added for Order #{$event->orderId}");
    }
}
