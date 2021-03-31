<?php

namespace App\Listeners;


use App\Events\IssuePenaltyEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateLoansListener
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
     * @param  IssuePenaltyEvent  $event
     * @return void
     */
    public function handle(IssuePenaltyEvent $event)
    {
        //
    }
}
