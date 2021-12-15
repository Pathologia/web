<div class="modal fade" id="UpdateRoleModal_{{$role->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('roles.update')}}" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Mise à jour d'un rôle</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="role_id" value="{{$role->id}}">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" name="libelle" id="libelle" placeholder="Nom du rôle" value="{{$role->libelle??old('libelle')}}" required>
                            <label for="label">Nom du rôle</label>
                        </div>
                        @error('libelle')
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
