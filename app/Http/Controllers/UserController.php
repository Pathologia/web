<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        $user = Auth::user();
        $roles = Role::all();
        return view('auth.user.profil', [
            'user'=>$user,'roles'=>$roles
        ]);
    }

    public function edit()
    {
        //
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required',
        ]);
        $user = User::find(Auth::user()->id);
        $user->update([
            'firstname'=>$request->prenom,
            'lastname'=>$request->nom,
            'email'=>$request->email,
        ]);
        return redirect()->route('user.show')->withErrors(['success' => 'Vos informations de compte ont bien été enregistrées']);
    }

    public function destroy()
    {
        //
    }
}
