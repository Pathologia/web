@extends('auth.template')
@section('auth.admin.role.interface.show')
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#NewRoleModal">Créer un nouveau rôle</button>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class="tab-content">
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
</div>
@include('modals.new_role')
@endsection
