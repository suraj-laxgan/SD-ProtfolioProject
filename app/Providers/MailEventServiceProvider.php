<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Events\ThankYouMailEvent;
use App\Listeners\ThankYouMailListener;

class MailEventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    protected $listen = [
        ThankYouMailEvent::class => [
            ThankYouMailListener::class,
        ],
    ];
    // public function register(): void {}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
