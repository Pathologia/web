<div class="tab-pane fade" id="liste_archive" role="tabpanel" wfd-invisible="true">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col mt-0">
                    <h5 class="card-title">Liste des utilisateurs actifs</h5>
                </div>
            </div>
            <table class="table table-striped table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                  <tr class="text-center">
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Inscription</th>
                  </tr>
                </thead>
                <tbody>
                    @php $tmp = 0; @endphp
                    @foreach ($users as $ent_user)
                        @if(!empty($ent_user->archived_at))
                            <tr class="text-center">
                                <td>{{$ent_user->firstname}}</td>
                                <td>{{$ent_user->lastname}}</td>
                                <td><a href="mailto:{{$ent_user->email}}">{{$ent_user->email}}</a></td>
                                <td>{{Carbon\Carbon::parse($ent_user->created_at)->format("d-m-Y H:i:s")}}</td>
                            </tr>
                            @php $tmp = 1; @endphp
                        @endif
                    @endforeach
                </tbody>
            </table>
            @if($tmp === 0)
                <h3 class="text-center">Aucune entrée</h3>
            @endif
        </div>
    </div>
</div>
