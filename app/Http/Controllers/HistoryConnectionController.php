<?php

namespace App\Http\Controllers;

use App\Models\HistoryConnection;
use App\Http\Requests\StoreHistoryConnectionRequest;
use App\Http\Requests\UpdateHistoryConnectionRequest;
use App\Models\User;

class HistoryConnectionController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHistoryConnectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistoryConnectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistoryConnection  $historyConnection
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $ent_users = User::all();
        $connections = HistoryConnection::orderBy('created_at', 'desc')->get();
        return view('auth.admin.connection.interface', ['connections'=>$connections,'ent_users'=>$ent_users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoryConnection  $historyConnection
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoryConnection $historyConnection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistoryConnectionRequest  $request
     * @param  \App\Models\HistoryConnection  $historyConnection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistoryConnectionRequest $request, HistoryConnection $historyConnection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoryConnection  $historyConnection
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoryConnection $historyConnection)
    {
        //
    }
}
