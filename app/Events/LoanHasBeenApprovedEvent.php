<?php

namespace App\Events;

use App\Models\Loans\LoansAccountModel;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LoanHasBeenApprovedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $loans;


    public function __construct($loans)
    {
        //
        $this->loans = $loans;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new privateChannel('first');
    }
    public function broadcastWith()
    {
        return $this->loans;

    }

    public function broadcastAs()

    {
        return 'LoansApproved';
    }
}
