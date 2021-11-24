<nav class="sb-topnav navbar navbar-expand navbar-dark bg-transparent">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fas fa-bars fa-2x text-white"></i></button>
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Rechercher" aria-label="Rechercher" aria-describedby="btnNavbarSearch">
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search-plus"></i></button>
        </div>
    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-1x text-white"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li class="text-center"><a class="dropdown-item radius" href="{{route('user.show')}}">{{$user->firstname}} {{$user->lastname}}</a></li>
                <li><hr class="dropdown-divider radius"></li>
                <li><a class="dropdown-item radius" href=""><i class="fas fa-cogs"></i> Paramètres</a></li>
                <li><a class="dropdown-item radius text-danger" href="{{route('user.logout')}}"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
            </ul>
        </li>
    </ul>
</nav>
