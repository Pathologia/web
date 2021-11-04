<div class="tab-pane fade" id="password" role="tabpanel" wfd-invisible="true">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Mot de passe</h5>
            <form action="{{route('user.password.update')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="password0">Mot de passe actuel</label>
                    <input type="password" class="form-control @error('password0') is-invalid @enderror" id="password0" name="password0" placeholder="Votre mot de passe actuel" required>
                    @error('password0')
                        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password1">Nouveau mot de passe</label>
                    <input type="password" class="form-control @error('password1') is-invalid @enderror" id="password1" name="password1" placeholder="Votre nouveau mot de passe" required>
                    @error('password1')
                        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password2">Vérification du nouveau mot de passe</label>
                    <input type="password" class="form-control @error('password2') is-invalid @enderror" id="password2" name="password2" placeholder="Retappez votre nouveau mot de passe" required>
                    @error('password2')
                        <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary text-center">Enregistrer les changements</button>
            </form>
        </div>
    </div>
</div>
