<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getAll() {

        $listUsers = User::all()->except(Auth::id());

        return view('/home', ['listUsers' => $listUsers]);

    }
}
