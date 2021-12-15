<div class="tab-pane fade" id="liste_active" role="tabpanel" wfd-invisible="true">
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
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $ent_user)
                        @if(empty($ent_user->archived_at))
                            <tr class="text-center">
                                <td>{{$ent_user->firstname}}</td>
                                <td>{{$ent_user->lastname}}</td>
                                <td><a href="mailto:{{$ent_user->email}}">{{$ent_user->email}}</a></td>
                                <td>{{Carbon\Carbon::parse($ent_user->created_at)->format("d/m/Y")}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <form action="" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="user_id" value="{{$ent_user->id}}">
                                                <button type="submit" class="btn btn-warning"><i class="fas fa-archive"></i></button>
                                            </form>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <form action="" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="user_id" value="{{$ent_user->id}}">
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
