<form action="{{route('password.reset')}}" method="POST">
    @csrf
    <div class="mb-3 form-floating">
        <input class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" name="username" id="username_password" placeholder="Votre identifiant" />
        <label for="username_password">Mot de passe</label>
    </div>
    @error('username')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div class="mb-5 form-floating">
        <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" id="email_password" placeholder="Votre adresse email" />
        <label for="email_passwo">Mot de passe</label>
    </div>
    @error('password')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div class="text-center mt-5">
        <button type="submit" class="btn btn-lg btn-warning">Réinitialiser</button>
    </div>
</form>
