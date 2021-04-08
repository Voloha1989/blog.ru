<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getListUsers()
    {
        $listUsers = User::where('id', '!=', Auth::id())->orderby('name', 'ASC')->paginate(7);
        return view('/home', ['listUsers' => $listUsers]);
    }
}
