@extends('auth.template')
@section('auth.user.profil.show')
<div class="row">
    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-2 col-xxl-2">
        <div class="card">
            <div class="list-group list-group-flush" role="tablist">
                <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account" role="tab">Mon compte</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#data" role="tab">Mes données</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password" role="tab">Mot de passe</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-10 col-xxl-10">
        <div class="tab-content">
            @include('auth.user.compte')
            @include('auth.user.donnees')
            @include('auth.user.password')
        </div>
    </div>
@endsection
