@extends('auth.template.template')
@section('auth.admin.user.interface.show')
<div class="row">
    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-2 col-xxl-2">
        <div class="card">
            <div class="list-group list-group-flush" role="tablist">
                <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#nouveau" role="tab">Nouvel utilisateur</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#liste_active" role="tab">Liste des utilisateurs</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#liste_archive" role="tab">Utilisateurs archivés</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-10 col-xxl-10">
        <div class="tab-content">
            @include('auth.admin.user.creation')
            @include('auth.admin.user.liste-active')
            @include('auth.admin.user.liste-archive')
        </div>
    </div>
@endsection
