<?php

namespace App\Http\Controllers;

use App\Mail\NewAccountNotification;
use App\Mail\ResetPasswordNotification;
use App\Models\Role;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $user = Auth::user();
        $users = User::all();
        $roles = Role::all();
        return view('auth.admin.user.interface', [
            'user'=>$user,'roles'=>$roles, 'users'=>$users
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required',
        ]);
        $password = substr(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ-_*+/&?!0123456789', 18), 17, 50);
        $tmp = User::create([
            'firstname'=>$request->prenom,
            'lastname'=>$request->nom,
            'email'=>$request->email,
            'password'=>bcrypt($password),
            'username'=>substr(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', 19), 19, 6),
            'role_id'=>1,
        ])->id;
        $user = User::where('id',$tmp)->first();
        Log::info("Création utilisateur: ".$user->id);
        Mail::to($user->email)->send(new NewAccountNotification($user, $password));
        return redirect()->route('users.create')->withErrors(['success' => 'Utilisateur créé avec succès']);
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

    public function reset(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
        ]);
        $request_user = User::where('username', $request->username)->first();
        if($request_user->email === $request->email)
        {
            Log::notice("Mot de passe réinitialisé: ".$request->username);
            $password = substr(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ-_*+/&?!|0123456789', 3), 0, 50);
            $request_user->update(['password'=>bcrypt($password)]);
            Mail::to($request_user->email)->send(new ResetPasswordNotification($request_user, $password));
            return redirect()->route('login')->withErrors(['success'=> 'Mot de passe envoyé par email.']);
        }
        Log::notice("Tentative de reset password sur utilisateur: ".$request->username);
        return redirect()->route('password.show')->withErrors(['error'=> 'Compte ou email introuvable.']);
    }

    public function updatePassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if($request->password1 === $request->password2 && Hash::check($request->password0, $user->password))
        {
            $user->update(['password'=>bcrypt($request->password1)]);
            return redirect()->route('user.show')->withErrors(['success'=> 'Mot de passe enregistré.']);
        }
        return redirect()->route('user.show')->withErrors(['error'=> 'Les 2 mots de passe ne correspondent pas.']);
    }
}
