<?php

use App\Broadcasting\FirstChannel;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('first', FirstChannel::class);
Broadcast::channel('chat-channel.{user_id}', \App\Broadcasting\ChatChannel::class);
Broadcast::channel('message-notification.{user_id}',\App\Broadcasting\MessageNotificationChannel::class);
