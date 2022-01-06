<?php

namespace App\Http\Controllers;

use App\Models\HistoryConnection;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ConnexionController extends Controller
{
    /**
     * @OA\Post(
     *      path="/public/login",
     *      operationId="login",
     *      tags={"Connexion"},

     *      summary="Authentification de l'utilisateur",
     *      description="Retourne un object utilisateur",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
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
        if (Auth::attempt($crendentials, $request->remember) && empty(Auth::user()->archived_at) && Auth::user()->archived_at === null) {
            Log::info("Connexion de l'utilisateur " . Auth::user()->id . " le " . Carbon::now());
            $user = User::find(Auth::user()->id);
            $user->update(['connected_at' => Carbon::now()]);
            $request->session()->regenerate();

            HistoryConnection::create([
                'user_id'=>$user->id,
                'user_agent'=>$request->server('HTTP_USER_AGENT'),
                'ip_address'=>$request->ip(),
                'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
            ]);
            if($user->role_id === 1)
            {
                return redirect()->route('users.create');
            }
            elseif($user->role_id >= 2)
            {
                return redirect()->route('home.show');
            }
        }
        else
        {
            Auth::logout();
            return redirect()->route('login')->withErrors(['error'=>'Connexion impossible']);
        }
        return redirect()->route('login')->withErrors(['error' => 'Connexion impossible. Veuillez vérifier votre identifiant / mot de passe']);
    }

    /**
     * @OA\Get(
     *      path="/auth/logout",
     *      operationId="logout",
     *      tags={"Connexion"},

     *      summary="Désauthentifie l'utilisateur connecté",
     *      description="Supprime la session de l'utilisateur",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
