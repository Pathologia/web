<?php

namespace App\Http\Controllers;

use App\Mail\NewAccountNotification;
use App\Mail\ResetPasswordNotification;
use App\Models\HistoryAction;
use App\Models\HistoryConnection;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
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

    /**
     * @OA\Get(
     *      path="/auth/admin/users",
     *      operationId="create",
     *      tags={"Admin/Utilisateur"},

     *      summary="Affichage admin utilisateurs",
     *      description="Affiche le panneau d'administration des utilisateurs",
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
    public function create()
    {
        $user = Auth::user();
        $users = User::all();
        $roles = Role::all();
        return view('auth.admin.user.interface', [
            'user'=>$user,'roles'=>$roles, 'users'=>$users
        ]);
    }

    /**
     * @OA\Post(
     *      path="/auth/admin/users",
     *      operationId="store",
     *      tags={"Admin/Utilisateur"},

     *      summary="Création utilisateur",
     *      description="Créé un nouvel utilisateur",
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required',
            'role_id' => 'required',
        ]);
        $password = substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ-_*+/&?!0123456789', ceil(50/strlen($x)) )),1,50);
        $tmp = User::create([
            'firstname'=>$request->prenom,
            'lastname'=>$request->nom,
            'email'=>$request->email,
            'password'=>bcrypt($password),
            'username'=>substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', ceil(8/strlen($x)) )),1,6),
            'role_id'=>$request->role_id,
        ])->id;
        $user = User::find($tmp);
        Log::info("Création utilisateur: ".$user->id);
        Mail::to($user->email)->send(new NewAccountNotification($user, $password));
        HistoryAction::create([
            'user_id'=>Auth::user()->id,
            'label'=>"Création de l'utilisateur ".$user->role_id,
            'user_agent'=>$request->server('HTTP_USER_AGENT'),
            'ip_address'=>$request->ip(),
            'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
        ]);
        return redirect()->route('users.create')->withErrors(['success' => 'Utilisateur créé avec succès']);
    }

        /**
     * @OA\Get(
     *      path="/auth/user/me",
     *      operationId="show",
     *      tags={"Utilisateurs"},

     *      summary="Affiche l'utilisateur",
     *      description="Affiche le profil de l'utilisateur connecté",
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
    public function show()
    {
        $user = User::find(Auth::user()->id);
        $roles = Role::all();
        return view('auth.user.profil', ['user'=>$user,'roles'=>$roles]);
    }

    public function edit()
    {
        //
    }

        /**
     * @OA\Put(
     *      path="/auth/user/me",
     *      operationId="update",
     *      tags={"Utilisateurs"},

     *      summary="Mise à jour du profil",
     *      description="Mise à jour du profil de l'utilisateur connecté",
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
    public function update(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
        ]);
        $user = User::find(Auth::user()->id)->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
        ]);
        HistoryAction::create([
            'user_id'=>Auth::user()->id,
            'label'=>"MAJ du profil",
            'user_agent'=>$request->server('HTTP_USER_AGENT'),
            'ip_address'=>$request->ip(),
            'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
        ]);
        return redirect()->route('user.show')->withErrors(['success' => 'Vos informations de compte ont bien été enregistrées']);
    }

    public function unarchive(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
        ]);
        User::find($request->user_id)->update(['archived_at'=>null]);
        HistoryAction::create([
            'user_id'=>Auth::user()->id,
            'label'=>"Réactivation du compte ".$request->user_id,
            'user_agent'=>$request->server('HTTP_USER_AGENT'),
            'ip_address'=>$request->ip(),
            'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
        ]);
        return redirect()->route('users.create')->withErrors(['success' => 'Utilisateur réactivé']);
    }

    public function archive(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
        ]);
        User::find($request->user_id)->update([
            'archived_at'=>Carbon::now(),
        ]);
        HistoryAction::create([
            'user_id'=>Auth::user()->id,
            'label'=>"Archive du compte ".$request->user_id,
            'user_agent'=>$request->server('HTTP_USER_AGENT'),
            'ip_address'=>$request->ip(),
            'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
        ]);
        return redirect()->route('users.create')->withErrors(['success' => 'Utilisateur modifié avec succès']);
    }

            /**
     * @OA\Post(
     *      path="/public/password",
     *      operationId="reset",
     *      tags={"Utilisateurs"},

     *      summary="Réinitialisation password",
     *      description="Réinitialisation du mot de passe utilisateur",
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
            $password = substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ-_*+/&?!0123456789', ceil(50/strlen($x)) )),1,50);
            $request_user->update(['password'=>bcrypt($password)]);
            Mail::to($request_user->email)->send(new ResetPasswordNotification($request_user, $password));
            HistoryAction::create([
                'user_id'=>$request_user->id,
                'label'=>"Regénération du mot de passe",
                'user_agent'=>$request->server('HTTP_USER_AGENT'),
                'ip_address'=>$request->ip(),
                'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
            ]);
            return redirect()->route('login')->withErrors(['success'=> 'Mot de passe envoyé par email.']);
        }
        Log::notice("Tentative de reset password sur utilisateur: ".$request->username);
        return redirect()->route('password.show')->withErrors(['error'=> 'Compte ou email introuvable.']);
    }

           /**
     * @OA\Put(
     *      path="/auth/user/me/password",
     *      operationId="updatePassword",
     *      tags={"Utilisateurs"},

     *      summary="Update password",
     *      description="Mise à jour du mot de passe utilisateur",
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
    public function updatePassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if($request->password1 === $request->password2 && Hash::check($request->password0, $user->password))
        {
            $user->update(['password'=>bcrypt($request->password1)]);
            HistoryAction::create([
                'user_id'=>Auth::user()->id,
                'label'=>"Modification du mot de passe",
                'user_agent'=>$request->server('HTTP_USER_AGENT'),
                'ip_address'=>$request->ip(),
                'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
            ]);
            return redirect()->route('user.show')->withErrors(['success'=> 'Mot de passe enregistré.']);
        }
        return redirect()->route('user.show')->withErrors(['error'=> 'Les 2 mots de passe ne correspondent pas.']);
    }

    public function emailVerify($email,$id, Request $request)
    {
        $user = User::find($id);
        if($user->email === $email)
        {
            $user->update(['email_verified_at'=>Carbon::now()]);
            Auth::loginUsingId($id);
            HistoryAction::create([
                'user_id'=>Auth::user()->id,
                'label'=>"Vérification du mot de passe",
                'user_agent'=>$request->server('HTTP_USER_AGENT'),
                'ip_address'=>$request->ip(),
                'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
            ]);
            HistoryConnection::create([
                'user_id'=>$user->id,
                'user_agent'=>$request->server('HTTP_USER_AGENT'),
                'ip_address'=>$request->ip(),
                'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
            ]);
            return redirect()->route('user.show')->withErrors(['success'=>'Votre email de récupération à bien été vérifié']);
        }
        return redirect()->route('user.show')->withErrors(['error'=>'Impossible de vérifier votre adresse email de récupération']);
    }
}
