@extends('auth.template')
@section('auth.admin.connection.interface.show')
<div class="row">
    {{-- <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-2 col-xxl-2">
        <div class="card">
            <div class="list-group list-group-flush" role="tablist">
                <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#nouveau" role="tab">Nouvel utilisateur</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#liste_active" role="tab">Liste des utilisateurs</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#liste_archive" role="tab">Utilisateurs archivés</a>
            </div>
        </div>
    </div> --}}
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class="tab-content table-responsive">
            <table class="table table-striped table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                  <tr class="text-center">
                    <th>Utilisateur</th>
                    <th>Adresse IP</th>
                    <th>Session Name</th>
                    <th>User Agent</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                    @if($connections->isEmpty())
                        <h3 class="text-center">Aucune entrée pour le moment</h3>
                    @else
                        @foreach ($connections as $connection)
                        <tr>
                            <td>
                                @foreach($ent_users as $ent_user)
                                    @if($ent_user->id === $connection->user_id)
                                        {{$ent_user->firstname}} {{$ent_user->lastname}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{$connection->ip_address}}</td>
                            <td>{{$connection->session_name}}</td>
                            <td>{{$connection->user_agent}}</td>
                            <td>{{Carbon\Carbon::parse($connection->created_at)->format('d/m/Y H:i')}}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
