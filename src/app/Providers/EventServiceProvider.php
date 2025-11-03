<?php
// app/Providers/EventServiceProvider.php
namespace App\Providers;

use App\Events\OrderPlaced;
use App\Listeners\UpdateStock;
use App\Listeners\AddRewardPoints;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        OrderPlaced::class => [
            UpdateStock::class,
            AddRewardPoints::class,
        ],
    ];

    // public function boot()
    // {
    //     parent::boot();

    //     // Manual registration as backup
    //     Event::listen(OrderPlaced::class, UpdateStock::class);
    //     Event::listen(OrderPlaced::class, AddRewardPoints::class);
    // }
}
