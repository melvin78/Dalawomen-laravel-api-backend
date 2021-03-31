<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\UserSendMessageRequest;
use App\Models\ChatMessages;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public function fetchMessages(UserSendMessageRequest $request)
    {
        $validated_userid = $request->validated();


        $messag = ChatMessages::with('user')
            ->where(function ($query) use ($validated_userid) {
                $query->whereFrom_user(Auth::user()->id)->whereTo_user($validated_userid['user_id']);
            })
            ->orWhere(function ($query) use ($validated_userid) {
                $query->whereFrom_user($validated_userid['user_id'])->whereTo_user(Auth::user()->id);
            })
            ->latest()->limit(10)->get();
        $messages = $messag->reverse()->values();

        //order from latest message

        $values = array();
        foreach ($messages as $message) {
            $info['message'] = $message['message'];
            $info['sent'] = Carbon::parse($message['created_at'])->diffForHumans();
            $info['from'] = $message['from_user'];
            $info['to'] = $message['to_user'];

            array_push($values, $info);
        }
        return response()->json(['data' => $values]);
    }

    public function sendMessages(MessageRequest $request)
    {

        $validated_messages = $request->validated();

        $sender_name = Auth::user()->name;
        broadcast(new ChatEvent($validated_messages['message'], $validated_messages['user_id'], Auth::id(), $sender_name))->toOthers();
        return response()->json([
            'data' => 'sent'
        ]);


    }
}
