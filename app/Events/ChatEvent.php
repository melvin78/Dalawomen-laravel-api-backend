<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $user_id;
    public $id;
    public $sender_name;

    /**
     * Create a new event instance.
     *
     * @param $message
     * @param $user_id
     * @param $id
     * @param $sender_name
     */
    public function __construct($message, $user_id, $id,$sender_name)
    {

        $this->message = $message;
        $this->user_id = $user_id;
        $this->id = $id;

        $this->sender_name = $sender_name;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return[
            new PrivateChannel('chat-channel.' . $this->user_id),
            new PrivateChannel('message-notification.' . $this->user_id),
        ];



    }

    public function broadcastWith()
    {
        return [

                'message' => $this->message,
            'from'=>$this->sender_name



        ];
    }

    public function broadcastAs()
    {

        return 'Chat';
    }
}
