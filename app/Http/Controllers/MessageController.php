<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function save(Request $request)
    {
        $result = $request->input('text') ? "true" : null;

        if ($result) {
            $message = new Message();
            $message->auth_email = $request->input('auth_email');
            $message->user_email = $request->input('user_email');
            $message->name = $request->input('name');
            $message->text = $request->input('text');
            $message->save();
        }

        return $result;
    }

    public function getAll()
    {
        $listMessages = Message::where('user_email', '=', Auth::user()->email)->get();
        return view('messages/myMessages', ['listMessages' => $listMessages]);
    }
}
