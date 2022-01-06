<div class="tab-pane fade show active" id="account" role="tabpanel">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col mt-0">
                    <h5 class="card-title">Mes informations</h5>
                </div>
            </div>
            <form action="{{route('user.update')}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="mb-3 col-12">
                        <label class="form-label" for="email">Identifiant</label>
                        <input type="text" class="form-control" value="{{$user->username}}" disabled>
                    </div>
                    <div class="col-12 row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="firstname">Prénom</label>
                            <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="Votre prénom" value="{{$user->firstname}}">
                            @error('firstname')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="lastname">Nom</label>
                            <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="Votre nom" value="{{$user->lastname}}">
                            @error('lastname')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-12">
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
