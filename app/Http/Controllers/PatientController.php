<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patient = Patient::find($request->id);
        return view('auth.patient.information', ['patient'=>$patient]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $crendentials = $this->validate($request, [
            'sex' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required',
            'email' => 'required',
            'address_id' => 'required',
        ]);
        Patient::create([
            'doc_id'=>Auth::user()->id,
            'sex'=>$request->sex,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'age'=>Carbon::parse($request->age),
            'email'=>$request->email,
            'address_id'=>$request->address_id,
        ]);
        return redirect()->route('patients.show')->withErrors(['success'=>'Patient créé avec succès']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $patients = Patient::where('doc_id', Auth::user()->id)->get();
        return view('auth.patient.interface', ['patients'=>$patients]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $crendentials = $this->validate($request, [
            'patient_id' => 'required',
        ]);
        Patient::find($request->patient_id)->update([
            'doc_id'=>Auth::user()->id,
        ]);
        return redirect()->route('patients.index', $request->patient_id)->withErrors(['success'=>'Patient rappatrié avec succès']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $crendentials = $this->validate($request, [
            'patient_id' => 'required',
            'sex' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required',
            'email' => 'required',
            'address_id' => 'required',
        ]);
        Patient::find($request->patient_id)->update([
            'sex'=>$request->sex,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'age'=>Carbon::parse($request->age),
            'email'=>$request->email,
            'address_id'=>$request->address_id,
        ]);
        return redirect()->route('patients.index', $request->patient_id)->withErrors(['success'=>'Patient modifié avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $crendentials = $this->validate($request, [
            'patient_id' => 'required',
        ]);
        Patient::find($request->patient_id)->delete();
        return redirect()->route('patients.show')->withErrors(['success'=>'Patient supprimé avec succès']);
    }
}
