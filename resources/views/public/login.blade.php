<form action="{{route('login.connect')}}" method="POST">
    @csrf
    <div class="mb-3 form-floating">
        <input class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" name="username" id="username" placeholder="Votre identifiant" />
        <label for="username">Identifiant</label>
    </div>
    @error('username')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div class="mb-3 form-floating">
        <input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Votre mot de passe" />
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
    <div class="text-center mt-2">
        <button type="submit" class="btn btn-lg btn-warning">Se connecter</button>
    </div>
</form>
