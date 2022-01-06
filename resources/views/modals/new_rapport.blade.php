<div class="modal fade" id="NewRapportModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{URL::signedRoute('rapports.create')}}" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Nouveau rapport sur le patient</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="patient_id" value="{{$patient->id}}">
                    <div class="form-floating mb-3 mt-3">
                        <label class="form-label" for="report">Rapport</label>
                        <textarea style="height: 200px !important;" class="form-control @error('report') is-invalid @enderror" id="report" name="report" placeholder="Rapport" required>{{old('report')}}</textarea>
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
