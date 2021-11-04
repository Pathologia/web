<div class="tab-pane fade show active" id="nouveau" role="tabpanel">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col mt-0">
                    <h5 class="card-title">Nouvel utilisateur</h5>
                </div>
            </div>
            <form action="{{route('user.update')}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-12 col-sm12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="prenom">Prénom</label>
                            <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" name="prenom" placeholder="Votre prénom" value="{{$user->firstname ?? old('prenom')}}" required>
                            @error('prenom')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="nom">Nom</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" placeholder="Votre nom" value="{{$user->lastname ?? old('nom')}}" required>
                            @error('nom')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{$user->email ?? old('email')}}" placeholder="Votre adresse email" required>
                            @error('email')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer les changements</button>
                </div>
            </form>
        </div>
    </div>
</div>
