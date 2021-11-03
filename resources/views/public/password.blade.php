@extends('public.template.template')
@section('public.login.show')
<div class="text-center mb-3">
    <img src="{{asset('img/logo/logo.png')}}" alt="Logo PathologIA" class="img-fluid rounded-circle" width="300" height="300" />
    <h4 class="mb-2 text-white">Réinitialiser mon mot de passe</h4>
</div>
<form action="{{route('password.reset')}}" method="POST">
    @csrf
    <div class="mb-3">
        <input class="form-control form-control-lg @error('identifiant') is-invalid @enderror" type="text" name="identifiant" placeholder="Votre identifiant" />
    </div>
    @error('identifiant')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" placeholder="Votre adresse email" />
        <small>
            <a href="{{route('login')}}" class="text-warning">Se connecter</a>
        </small>
    </div>
    @error('password')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-lg btn-warning">Réinitialiser mon mot de passe</button>
    </div>
</form>
@endsection
