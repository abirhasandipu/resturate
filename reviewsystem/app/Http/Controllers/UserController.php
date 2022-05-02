<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index() {
        $users = User::all();
        return view("users", [
            'users' => $users,
        ]);
    }

    function getUser($id) {
        $user = User::find($id);
        return view("profile", [
            'user' => $user,
        ]);
    }
}
