<nav id="sidebar" class="sidebar js-sidebar text-white bg-medium">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand text-center" href="{{route('home.show')}}"><span>Patholog <strong>IA</strong></span></a>
        <div class="sidebar-user">
            <div class="d-flex justify-content-center">
                <div class="flex-grow-1 ps-2">
                    <span class="sidebar-user-title ">{{$user->firstname}} {{$user->lastname}}</span>
                </div>
            </div>
        </div>

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
                        <a class="dropdown-item text-danger" style="border-radius:25px;" href="{{route('user.logout')}}"><i class="fas fa-sign-out-alt"></i> Me déconnecter</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</nav>
