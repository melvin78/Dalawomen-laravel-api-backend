<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewCustomerHasRegisteredEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $email;

    /**
     * Create a new event instance.
     *
     * @param $user
     * @param $email
     */
    public function __construct($user,$email)
    {
        //
        $this->user = $user;
        $this->email = $email;
    }


}
