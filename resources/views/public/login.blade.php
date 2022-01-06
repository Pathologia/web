@extends('public.template')
@section('public.login.show')
<form action="{{URL::signedRoute('login.connect')}}" method="POST">
    @csrf
    <div class="mt-2 mb-4 form-floating">
        <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" id="username" placeholder="Votre identifiant" />
        <label for="username">Identifiant</label>
    </div>
    @error('username')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div class="mt-2 mb-4 form-floating">
        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Votre mot de passe" />
        <label for="password">Mot de passe</label>
    </div>
    @error('password')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div>
        <label class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" checked>
        <span class="form-check-label text-white">
        Se souvenir de moi
        </span>
    </label>
    </div>
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-md btn-secondary">Se connecter</button>
    </div>
    <div class="text-center mt-4 mb-1">
        <a class="text-white text-decoration-none" href="{{route('password.show')}}">Mot de passe oublié ?</a>
    </div>
</form>
@endsection
