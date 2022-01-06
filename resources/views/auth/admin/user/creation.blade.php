<div class="tab-pane fade" id="nouveau" role="tabpanel" wfd-invisible="true">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col mt-0">
                    <h5 class="card-title">Enregistrer un nouvel utilisateur</h5>
                </div>
            </div>
            <form action="{{route('users.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="prenom">Prénom</label>
                            <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" name="prenom" placeholder="Prénom du nouveau compte" value="{{old('prenom')}}" required>
                            @error('prenom')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="nom">Nom</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" placeholder="Prénom du nouveau compte" value="{{old('nom')}}" required>
                            @error('nom')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="Adresse email du nouveau compte" required>
                            @error('email')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label" for="role_id">Rôle</label>
                            <select class="form-select" id="role_id" name="role_id">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->libelle}}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Créer le nouvel utilisateur</button>
                </div>
            </form>
        </div>
    </div>
</div>
