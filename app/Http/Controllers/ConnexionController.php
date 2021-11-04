<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ConnexionController extends Controller
{
    public function login(Request $request)
    {
        $crendentials = $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($request->remember === 'on') {
            $request->remember = true;
        } else {
            $request->remember = false;
        }

        if (Auth::attempt($crendentials, $request->remember)) {
            Log::info("Connexion de l'utilisateur " . Auth::user()->id . " le " . Carbon::now());
            $user = User::find(Auth::user()->id);
            $user->update(['connected_at' => Carbon::now()]);
            $request->session()->regenerate();
            return redirect()->route('home.show');
        }
        return redirect()->route('login')->withErrors(['error' => 'Connexion impossible. Veuillez vérifier votre identifiant / mot de passe']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}