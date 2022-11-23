<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //register user
    public function registerUser(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),

        ]);
    }

    public function loginUser(Request $req)
    {
    }
}