<?php

namespace App\Listeners;

use App\Events\ThankYouMailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\ThankYouMail;

class ThankYouMailListener implements ShouldQueue
// 
{
    // Define the queue name here
    public $queue = 'thankYou_mail';

   // Ensure the DB transaction finishes first
    public $afterCommit = true;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ThankYouMailEvent $event): void
    {
        Mail::to($event->contact->email)->send(new ThankYouMail($event->contact));
    }
}
