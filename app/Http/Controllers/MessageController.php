<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function saveFormMessage(Request $request)
    {
        $text = $request->input('text');
        $result = $text ? "true" : null;

        if ($result) {
            $message = new Message();
            $message->auth_email = $request->input('auth_email');
            $message->user_email = $request->input('user_email');
            $message->name = $request->input('auth_name');
            $message->text = $text;
            $message->save();
        }

        return $result;
    }

    public function getListIncomingMessages()
    {
        $listIncomingMessages = Message::where('user_email', '=', Auth::user()->email)->orderby('auth_email', 'ASC')->paginate(8);
        return view('messages/list-incoming-messages', ['listIncomingMessages' => $listIncomingMessages]);
    }

    public function deleteMessage($id) {
        Message::find($id)->delete();
        return redirect('/list-incoming-messages');
    }

    public function getMessage($id) {
        $message = Message::find($id);
        return view('messages/detail-view-message', ['message' => $message]);
    }
}
