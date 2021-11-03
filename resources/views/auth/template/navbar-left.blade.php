<nav id="sidebar" class="sidebar js-sidebar text-white bg-dark">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand text-center" href="{{route('home.show')}}"><span>Patholog <strong>IA</strong></span></a>
        {{-- <div class="sidebar-user mt-5">
            <div class="d-flex justify-content-center mt-5 ">
                <div class="flex-shrink-0">
                    <img src="data:image/jpeg;base64,{{$user->avatar}}" class="avatar img-fluid rounded me-1" alt="{{$user->prenom}} {{$user->nom}}"/>
                    @else
                    <img src="{{asset('img/logo/logo_1000.png')}}" class="avatar img-fluid rounded me-1" alt="{{$user->prenom}} {{$user->nom}}"/>
                    @endif
                </div>
                <div class="flex-grow-1 ps-2">
                    <span class="sidebar-user-title text-dark">{{$user->prenom}} {{$user->nom}}</span>
                    @if(!empty($user->archived_at))
                        <div class="sidebar-user-subtitle text-warning">Compte désactivé</div>
                    @else
                        <div class="sidebar-user-subtitle text-dark"><i class="fas fa-circle text-success"></i> Connecté</div>
                    @endif
                </div>
            </div>
        </div> --}}

        <ul class="sidebar-nav">
            <li class="sidebar-header">Menu</li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('home.show')}}"><i class="align-middle" data-feather="sliders"></i> <span class="align-middle"> Accueil</span></a>
            </li>

        </ul>
        <footer class="footer text-light bg-transparent mb-5" style="z-index: 5">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-12 text-center">
                        <a class="dropdown-item text-danger" style="border-radius:25px;" href=""><i class="fas fa-sign-out-alt"></i> Me déconnecter</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</nav>
