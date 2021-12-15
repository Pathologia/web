<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function show()
    {
        return view('public.template');
    }

    public function showPassword()
    {
        return view('public.template.template');
    }

    public function redirectLogin()
    {
        return redirect()->route('login');
    }

    public function showHome()
    {
        $user = Auth::user();
        $roles = Role::all();
        return view('auth.menu', [
            'user'=>$user, 'roles'=>$roles
        ]);
    }
}
