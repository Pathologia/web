@extends('auth.template')
@section('auth.admin.resultat.interface.show')
<div class="row">

    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-8 col-xxl-8">
        <div class="tab-content table-responsive">
            <table class="table table-striped table-responsive-sm">
                <thead>
                  <tr class="text-center">
                    <th>Libellé</th>
                    <th>Création</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                    @if($roles->isEmpty())
                        <h3 class="text-center">Aucune entrée pour le moment</h3>
                    @else
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->libelle}}</td>
                            <td>{{Carbon\Carbon::parse($role->created_at)->format('d/m/Y')}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-warning border-radius" data-bs-toggle="modal" data-bs-target="#UpdateRoleModal_{{$role->id}}"><i class="fas fa-edit"></i></button>
                                        @include('modals.update_role')
                                    </div>
                                    <div class="col-6">
                                        <form action="{{route('roles.destroy')}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="role_id" value="{{$role->id}}"/>
                                            <button class="btn btn-danger border-radius"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
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
                <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="myPieChart" style="display: block; height: 245px; width: 265px;" width="331" height="306" class="chartjs-render-monitor"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Referral
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modals.new_role')
@endsection
