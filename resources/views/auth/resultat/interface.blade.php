@extends('auth.template')
@section('auth.admin.resultat.interface.show')
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-8 col-xxl-8">
        <div class="tab-content table-responsive">
            <h3 class="text-center">Demande d'analyse(s)</h3>
            <table class="table table-striped table-responsive-sm">
                <thead>
                  <tr class="text-center">
                    <th>Patient</th>
                    <th>Date</th>
                    <th>Données</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                    @if($analyses->isEmpty())
                        <h3 class="text-center">Aucune entrée pour le moment</h3>
                    @else
                        @foreach ($analyses as $analyse)
                        <tr>
                            <td>
                                @foreach ($patients as $patient)
                                    @if($patient->id === $analyse->patient_id)
                                        {{$patient->firstname}} {{$patient->lastname}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{Carbon\Carbon::parse($analyse->created_at)->format('d/m/Y')}}</td>
                            <td>{{$analyse->data_json}}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="tab-content table-responsive">
            <h3 class="text-center">Résultat(s) d'analyse(s)</h3>
            <table class="table table-striped table-responsive-sm">
                <thead>
                  <tr class="text-center">
                    <th>Patient</th>
                    <th>Date</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                    @if($resultats->isEmpty())
                        <h3 class="text-center">Aucune entrée pour le moment</h3>
                    @else
                        @foreach ($resultats as $resultat)
                        <tr>
                            <td>
                                @foreach ($patients as $patient)
                                    @if($patient->id === $resultat->patient_id)
                                        {{$patient->firstname}} {{$patient->lastname}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{Carbon\Carbon::parse($resultat->created_at)->format('d/m/Y')}}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Résultat graphique</h6>
            </div>
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                    </div>
                    <div class="chartjs-size-monitor-shrink"></div>
                </div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
