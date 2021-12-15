<div class="modal fade" id="SearchPatientModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('patients.search')}}" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Rechercher un patient</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                        @csrf
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" name="search" id="search" placeholder="Rechercher" value="{{old('search')}}" required>
                            <label for="search">Rechercher</label>
                        </div>
                        @error('search')
                            <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                        @enderror
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
