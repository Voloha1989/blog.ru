<?php

use App\User;

class UsersRepositories extends User
{
    public function getUsersJ()
    {
        $users = User::all();

        return json_encode($users);
    }
}