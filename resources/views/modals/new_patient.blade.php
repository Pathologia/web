<div class="modal fade" id="NewPatientModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{route('patients.create')}}" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Nouveau patient</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 form-floating mt-3 mb-3 text-center">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="femal" name="sex" value="1" checked="" required="">
                                <label class="form-check-label" for="femal">Femme</label>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 form-floating mt-3 mb-3 text-center">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="Male" name="sex" value="0" required="">
                                <label class="form-check-label" for="Male">Homme</label>
                            </div>
                        </div>
                        <div class="col-6 form-floating mb-3 mt-3">
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom du patient" value="{{old('firstname')}}" required>
                            <label for="firstname">Prénom du patient</label>
                            @error('firstname')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 form-floating mb-3 mt-3">
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom du patient" value="{{old('lastname')}}" required>
                            <label for="lastname">Nom du patient</label>
                            @error('lastname')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 form-floating mb-3 mt-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Adresse email" value="{{old('email')}}" required>
                            <label for="email">Adresse email</label>
                            @error('email')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 form-floating mb-3 mt-3">
                            <input type="date" class="form-control" name="age" id="age" placeholder="Âge" value="{{old('age')}}" required>
                            <label for="age">Âge</label>
                            @error('age')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 form-floating mb-3 mt-3">
                            <input type="text" class="form-control" name="address_id" id="address_id" placeholder="Adresse" value="{{old('address_id')}}" required>
                            <label for="address_id">Adresse</label>
                            @error('address_id')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
