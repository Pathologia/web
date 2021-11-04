<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Widget;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function show()
    {
        return view('public.template.template');
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
        $widgets = Widget::all();
        $roles = Role::all();
        return view('auth.widget.interface', [
            'user'=>$user, 'widgets'=>$widgets, 'roles'=>$roles
        ]);
    }
}
