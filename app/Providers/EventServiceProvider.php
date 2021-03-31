<?php

namespace App\Providers;

use App\Events\ChatEvent;
use App\Events\IssuePenaltyEvent;
use App\Events\LoanHasBeenApprovedEvent;
use App\Events\NewCustomerHasRegisteredEvent;
use App\Listeners\ChatListener;
use App\Listeners\NewCustomerHasRegisteredListener;
use App\Listeners\SendEmailNotification;
use App\Listeners\SendNotificationTomembers;
use App\Listeners\UpdateLoansListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,

        ],
        IssuePenaltyEvent::class => [
            UpdateLoansListener::class,
            SendEmailNotification::class
        ],
        LoanHasBeenApprovedEvent::class=>[
            SendNotificationTomembers::class
        ],
        ChatEvent::class=>[
            ChatListener::class
        ],
        NewCustomerHasRegisteredEvent::class=>[
            NewCustomerHasRegisteredListener::class
            ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
