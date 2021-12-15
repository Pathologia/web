@extends('auth.template')
@section('auth.patient.information.show')
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-4 col-xxl-4 text-center mt-3">
        <h3 class="sidebar-user-title text-dark mb-3">{{$patient->firstname}} {{$patient->lastname}}</h3>
        @if($patient->sex === 0)
        <i class="fas fa-male fa-2x"></i>
        @else
        <i class="fas fa-female fa-2x"></i>
        @endif
        <span>{{Carbon\Carbon::parse($patient->age)->format('d/m/Y')}} ({{Carbon\Carbon::now()->subYears((int)Carbon\Carbon::parse($patient->age)->format('Y'))->format('y')}} ans)</span>
        <hr>
        <p><a href="mailto:{{$patient->email}}"><i class="far fa-envelope"></i> {{$patient->email}}</a></p>
        <p><i class="fas fa-map-marker-alt"></i> {{$patient->address_id}}</p>
        <hr>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#UpdatePatientModal_{{$patient->id}}">Modifier la fiche patient</button>
        <br><br>
        <form action="{{route('patients.edit')}}" method="post">
            @csrf
            @method('put')
            <input type="hidden" name="patient_id" value="{{$patient->id}}">
            <button class="btn btn-warning">Rappatrier ce patient</button>
        </form>
        <br>
        <form action="{{route('patients.destroy')}}" method="post">
            @csrf
            @method('delete')
            <input type="hidden" name="patient_id" value="{{$patient->id}}">
            <button class="btn btn-danger">Supprimer ce patient</button>
        </form>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-8 col-xxl-8 mt-3">
        <h3 class="text-center mb-3">Derniers résultats</h3>
        @if(empty($resultats))
            <p class="text-center">Aucun résultat d'analyse pour le moment</p>
        @else
            @foreach ($resultats as $resultat)
                <p>Résultat reçut le {{\Carbon\Carbon::parse($resultat->created_at)->format('d/m/Y')}}. Données: {{$resultat->data_json}} </p>
                <hr>
            @endforeach
        @endif
    </div>
</div>
@include('modals.update_patient')
@endsection
