<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function show()
    {
        return view('public.login');
    }

    public function showPassword()
    {
        return view('public.password');
    }

    public function redirectLogin()
    {
        return redirect()->route('login.show');
    }

    public function showHome()
    {
        return view('auth.template.template');
    }
}
