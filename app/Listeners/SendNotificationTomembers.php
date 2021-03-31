<?php

namespace App\Listeners;

use App\Events\LoanHasBeenApprovedEvent;
use App\Mail\TestMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendNotificationTomembers implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LoanHasBeenApprovedEvent  $event
     * @return void
     */
    public function handle(LoanHasBeenApprovedEvent $event)
    {
//    Mail::to('miles9ads5@example.org')->send(new TestMail($event));
    }
}
