<?php

namespace App\Http\Controllers;

use App\Models\PersonalData;
use App\Http\Requests\StorePersonalDataRequest;
use App\Http\Requests\UpdatePersonalDataRequest;

class PersonalDataController extends Controller
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
     * @param  \App\Http\Requests\StorePersonalDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonalDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalData  $personalData
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalData $personalData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalData  $personalData
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalData $personalData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonalDataRequest  $request
     * @param  \App\Models\PersonalData  $personalData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonalDataRequest $request, PersonalData $personalData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalData  $personalData
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalData $personalData)
    {
        //
    }
}
