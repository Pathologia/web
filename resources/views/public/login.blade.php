@extends('public.template.template')
@section('public.login.show')
<div class="text-center mb-3">
    <img src="{{asset('img/logo/logo.png')}}" alt="Logo PathologIA" class="img-fluid rounded-circle" width="300" height="300" />
</div>
<form action="" method="POST">
    @csrf
    <div class="mb-3">
        {{-- <label class="form-label">Identifiant</label> --}}
        <input class="form-control form-control-lg @error('identifiant') is-invalid @enderror" type="text" name="identifiant" placeholder="Votre identifiant" />
    </div>
    @error('identifiant')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        {{-- <label class="form-label">Mot de passe</label> --}}
        <input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" placeholder="Votre mot de passe" />
        <small>
            <a href="" class="text-warning">Mot de passe oublié ?</a>
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
