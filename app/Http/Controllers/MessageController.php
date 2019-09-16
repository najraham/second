<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message_body = $request->input('message');
        $message->save();

        return response()->json(['success' => "Your message was sent successfully."]);
    }
}
