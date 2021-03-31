<?php

namespace App\Listeners;

use App\Events\ChatEvent;
use App\Http\Requests\MessageRequest;
use App\Models\ChatMessages;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChatListener implements ShouldQueue
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
     * @param ChatEvent $event
     * @param MessageRequest $request
     * @return void
     */
    public function handle(ChatEvent $event)
    {


        ChatMessages::create([
            'message' => $event->message,
            'from_user' => $event->id,
            'to_user' => $event->user_id,
        ]);

    }
}
