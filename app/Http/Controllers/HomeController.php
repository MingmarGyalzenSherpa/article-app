<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //get dashboard view
    public function dashboard()
    {
        return view('dashboard');
    }

    //get login view
    public function login()
    {
        return view('login');
    }

    //get register view
    public function register()
    {
        return view('register');
    }
}