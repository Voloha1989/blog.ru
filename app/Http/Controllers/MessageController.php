<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function save(Request $request) {

        $text = $request->input('text');

        if(!$text) {
            $answer = "<p style='color: red;'>Введите сообщение</p>";
        } else {
            $mes = new Message();
            $mes->auth_email = $request->input('auth_email');
            $mes->user_email = $request->input('user_email');
            $mes->name = $request->input('name');
            $mes->text = $request->input('text');
            $mes->save();

            $answer = "<p style='color: green;'>Сообщение отправлено</p>";

        }

        return $answer;
    }

    public function getAll() {

        $listMessages = Message::all()->where('user_email', '=', Auth::user()->email);

        return view('messages/myMessages', ['listMessages' => $listMessages]);

    }
}
