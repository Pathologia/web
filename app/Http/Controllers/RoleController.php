<?php

namespace App\Http\Controllers;

use App\Models\HistoryAction;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $crendentials = $this->validate($request, [
            'libelle' => 'required',
        ]);
        $id = Role::create([
            'libelle'=>$request->libelle,
        ])->id;
        HistoryAction::create([
            'user_id'=>Auth::user()->id,
            'label'=>'Création du role '.$id,
            'user_agent'=>$request->server('HTTP_USER_AGENT'),
            'ip_address'=>$request->ip(),
            'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
        ]);
        return redirect()->route('roles.show')->withErrors(['success'=>'Rôle créé avec succès']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $roles = Role::all();
        return view('auth.admin.role.interface', ['roles'=>$roles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $crendentials = $this->validate($request, [
            'role_id' => 'required',
            'libelle' => 'required',
        ]);
        Role::find($request->role_id)->update([
            'libelle'=>$request->libelle,
        ]);
        HistoryAction::create([
            'user_id'=>Auth::user()->id,
            'label'=>'MAJ du role '.$request->role_id,
            'user_agent'=>$request->server('HTTP_USER_AGENT'),
            'ip_address'=>$request->ip(),
            'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
        ]);
        return redirect()->route('roles.show')->withErrors(['success'=>'Rôle modifié avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $crendentials = $this->validate($request, [
            'role_id' => 'required',
        ]);
        HistoryAction::create([
            'user_id'=>Auth::user()->id,
            'label'=>'Suppression du role '.$request->role_id,
            'user_agent'=>$request->server('HTTP_USER_AGENT'),
            'ip_address'=>$request->ip(),
            'session_name'=>$request->server('COMPUTERNAME')."/".$request->server('USERNAME'),
        ]);
        Role::find($request->role_id)->delete();
        return redirect()->route('roles.show')->withErrors(['success'=>'Rôle supprimé avec succès']);
    }
}
