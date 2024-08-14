<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RedirectControlleur extends Controller
{
    public function loginForm()
    {
        if(Auth::check())
    return redirect()->route('dashboard');
    return view('login');
    }

    public function register()
    {
        if (Auth::check())
    return redirect()->route('dashboard');
    return view('registration');
    }

    public function dashboard()
    {
        return view('dashborad');
    }
}
