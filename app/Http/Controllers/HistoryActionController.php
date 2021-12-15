<?php

namespace App\Http\Controllers;

use App\Models\HistoryAction;
use App\Http\Requests\StoreHistoryActionRequest;
use App\Http\Requests\UpdateHistoryActionRequest;

class HistoryActionController extends Controller
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
     * @param  \App\Http\Requests\StoreHistoryActionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistoryActionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistoryAction  $historyAction
     * @return \Illuminate\Http\Response
     */
    public function show(HistoryAction $historyAction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoryAction  $historyAction
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoryAction $historyAction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistoryActionRequest  $request
     * @param  \App\Models\HistoryAction  $historyAction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistoryActionRequest $request, HistoryAction $historyAction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoryAction  $historyAction
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoryAction $historyAction)
    {
        //
    }
}
