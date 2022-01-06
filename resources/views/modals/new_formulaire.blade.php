<div class="modal fade" id="NewFormulaireModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{route('patients.process')}}" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">Demander une analyse IA</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="patient_id" value="{{$patient->id}}">
                    <div class="row">
                        <div class="col-12 mb-3 mt-3">
                            <label class="form-label" for="type_formulaire">Type de formulaire</label>
                            <select class="form-select" id="type_formulaire" name="type_formulaire" onclick="showForm()">
                                <option value="0">Cancer du sein</option>
                                <option value="1">Alzheimer</option>
                            </select>
                            @error('role_id')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 form-floating mb-3 mt-3" id="id_MIMAT0005898">
                            <input type="number" step="0.0000001" class="form-control" name="MIMAT0005898" min="0" max="20" id="MIMAT0005898" placeholder="MIMAT0005898" value="{{old('MIMAT0005898')}}" required>
                            <label for="MIMAT0005898">MIMAT0005898</label>
                            @error('MIMAT0005898')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 form-floating mb-3 mt-3" id="id_MIMAT0005951">
                            <input type="number" step="0.0000001" class="form-control" name="MIMAT0005951" min="0" max="20" id="MIMAT0005951" placeholder="MIMAT0005951" value="{{old('MIMAT0005951')}}" required>
                            <label for="MIMAT0005951">MIMAT0005951</label>
                            @error('MIMAT0005951')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 form-floating mb-3 mt-3" id="id_MIMAT0019691">
                            <input type="number" step="0.0000001" class="form-control" name="MIMAT0019691" min="0" max="20" id="MIMAT0019691" placeholder="MIMAT0019691" value="{{old('MIMAT0019691')}}" required>
                            <label for="MIMAT0019691">MIMAT0019691</label>
                            @error('MIMAT0019691')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 form-floating mb-3 mt-3" id="id_MIMAT0027623">
                            <input type="number" step="0.0000001" class="form-control" name="MIMAT0027623" min="0" max="20" id="MIMAT0027623" placeholder="MIMAT0027623" value="{{old('MIMAT0027623')}}" required>
                            <label for="MIMAT0027623">MIMAT0027623</label>
                            @error('MIMAT0027623')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 form-floating mb-3 mt-3" id="id_MIMAT0027650">
                            <input type="number" step="0.0000001" class="form-control" name="MIMAT0027650" min="0" max="20" id="MIMAT0027650" placeholder="MIMAT0027650" value="{{old('MIMAT0027650')}}" required>
                            <label for="MIMAT0027650">MIMAT0027650</label>
                            @error('MIMAT0027650')
                                <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 form-floating mb-3 mt-3" id="id_imagerie">
                            <div class="input-group mb-3 mt-3">
                                <input type="file" class="form-control" id="imagerie" name="imagerie"/>
                                @error('imagerie')
                                    <div class="alert alert-danger alert-dismissible fade show">{{ $message }}</div>
                                @enderror
                            </div>
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
<script>
document.getElementById("id_imagerie").style.visibility  = "hidden";
document.getElementById("id_MIMAT0005898").style.visibility  = "hidden";
document.getElementById("id_MIMAT0005951").style.visibility  = "hidden";
document.getElementById("id_MIMAT0019691").style.visibility  = "hidden";
document.getElementById("id_MIMAT0027623").style.visibility  = "hidden";
document.getElementById("id_MIMAT0027650").style.visibility  = "hidden";
function showForm()
{
    const element = document.getElementById("type_formulaire");
    console.log(element.value);
    if(element.value ==0)
    {
        document.getElementById("id_imagerie").style.visibility  = "hidden";
        document.getElementById("id_MIMAT0005898").style.visibility  = "";
        document.getElementById("id_MIMAT0005951").style.visibility  = "";
        document.getElementById("id_MIMAT0019691").style.visibility  = "";
        document.getElementById("id_MIMAT0027623").style.visibility  = "";
        document.getElementById("id_MIMAT0027650").style.visibility  = "";
    }
    if(element.value ==1)
    {
        document.getElementById("id_imagerie").style.visibility  = "";
        document.getElementById("id_MIMAT0005898").style.visibility  = "hidden";
        document.getElementById("id_MIMAT0005951").style.visibility  = "hidden";
        document.getElementById("id_MIMAT0019691").style.visibility  = "hidden";
        document.getElementById("id_MIMAT0027623").style.visibility  = "hidden";
        document.getElementById("id_MIMAT0027650").style.visibility  = "hidden";
    }
}
</script>
