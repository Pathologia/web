@extends('public.template')
@section('public.password.show')
<form action="{{route('password.reset')}}" method="POST">
    @csrf
    <div class="mb-3 form-floating">
        <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" id="username_identifiant" placeholder="Votre identifiant" />
        <label for="username_identifiant"><i class="fas fa-fingerprint"></i> Identifiant</label>
    </div>
    @error('username')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div class="mb-5 form-floating">
        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email_email" placeholder="Votre adresse email" />
        <label for="email_email"><i class="fas fa-at"></i> Adresse email</label>
    </div>
    @error('password')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div class="text-center mt-5">
        <button type="submit" class="btn btn-md btn-secondary">Réinitialiser mon mot de passe</button>
    </div>
    <div class="text-center mt-4 mb-1">
        <a class="text-white text-decoration-none" href="{{route('login')}}">Se connecter</a>
    </div>
</form>
@endsection
