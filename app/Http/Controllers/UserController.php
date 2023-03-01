<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    function index(){
        $users = User::get();
        return view('users.index', ['users' => $users]);
    }

    function show(User $user){
        return view('users.index', compact('user'));
    }
}
