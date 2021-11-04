@extends('public.template.template')
@section('public.login.show')
<form action="{{route('login.connect')}}" method="POST">
    @csrf
    <div class="mb-3">
        <input class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" name="username" placeholder="Votre identifiant" />
    </div>
    @error('username')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" placeholder="Votre mot de passe" />
        <small>
            <a href="{{route('password.show')}}" class="text-warning">Mot de passe oublié ?</a>
        </small>
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
    <div class="text-center mt-3">
        <button type="submit" class="btn btn-lg btn-warning">Se connecter</button>
    </div>
</form>
@endsection
