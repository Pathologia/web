@extends('auth.template')
@section('auth.patient.liste.show')
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
        <h3>Recherche d'un patient</h3>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class="tab-content table-responsive">
            <table class="table table-striped table-responsive-sm">
                <thead>
                  <tr class="text-center">
                    <th>Médecin</th>
                    <th>Sexe</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Âge</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                    @if($patients->isEmpty())
                        <h3 class="text-center">Aucune entrée pour le moment</h3>
                    @else
                        @foreach ($patients as $patient)
                        <tr>
                            <td>
                                @foreach($medecins as $medecin)
                                @if($medecin->id === $patient->doc_id)
                                    {{$medecin->firstname}} {{$medecin->lastname}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                                @if($patient->sex === 0) M
                                @elseif($patient->sex === 1) F
                                @endif
                            </td>
                            <td><a href="{{route('patients.index', $patient->id)}}">{{$patient->firstname}}</a></td>
                            <td><a href="{{route('patients.index', $patient->id)}}">{{$patient->lastname}}</a></td>
                            <td>{{Carbon\Carbon::parse($patient->age)->format('d/m/Y')}} ({{Carbon\Carbon::now()->subYears((int)Carbon\Carbon::parse($patient->age)->format('Y'))->format('y')}} ans)</td>
                            <td>{{Carbon\Carbon::parse($patient->created_at)->format('d/m/Y')}}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('modals.new_patient')
@include('modals.search_patient')
@endsection
