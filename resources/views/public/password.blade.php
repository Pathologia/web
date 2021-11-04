<form action="{{route('password.reset')}}" method="POST">
    @csrf
    <div class="mb-3">
        <input class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" name="username" placeholder="Votre identifiant" />
    </div>
    @error('username')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div class="mb-5">
        <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" placeholder="Votre adresse email" />
    </div>
    @error('password')
        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
    @enderror
    <div class="text-center mt-5">
        <button type="submit" class="btn btn-lg btn-warning">Réinitialiser</button>
    </div>
</form>
