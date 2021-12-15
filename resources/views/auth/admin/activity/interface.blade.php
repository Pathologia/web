@extends('auth.template')
@section('auth.admin.activity.interface.show')
<div class="row">
    <div class="col-12 col-sm-12 col-md-8 col-lg-12 col-xl-12 col-xxl-12">
        <div class="tab-content table-responsive">
            <table class="table table-striped table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                  <tr class="text-center">
                    <th>Libellé</th>
                    <th>Utilisateur</th>
                    <th>Adresse IP</th>
                    <th>Session Name</th>
                    <th>User Agent</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                    @if($activities->isEmpty())
                        <h3 class="text-center">Aucune entrée pour le moment</h3>
                    @else
                        @foreach ($activities as $activity)
                        <tr>
                            <td>{{$activity->label}}</td>
                            <td>
                                @foreach($ent_users as $ent_user)
                                    @if($ent_user->id === $activity->user_id)
                                        {{$ent_user->firstname}} {{$ent_user->lastname}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{$activity->ip_address}}</td>
                            <td>{{$activity->session_name}}</td>
                            <td>{{$activity->user_agent}}</td>
                            <td>{{Carbon\Carbon::parse($activity->created_at)->format('d/m/Y H:i')}}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
