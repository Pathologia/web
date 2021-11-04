@extends('public.template.template')
@section('public.login.show')
<form action="{{route('password.reset')}}" method="POST">
    @csrf
    <div class="mb-3">
        <input class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" name="username" placeholder="Votre identifiant" />
    </div>
    @error('username')
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
