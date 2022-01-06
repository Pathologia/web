<nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fas fa-bars fa-2x text-white"></i></button>
    <h3 class="text-white me-0 me-md-3 my-2 my-md-0">
    @if(Auth::user()->role_id === 1 ) Edition Administrateur
    @elseif(Auth::user()->role_id === 2 ) Edition Médecin
    @elseif(Auth::user()->role_id === 3 ) Edition Secrétaire @endif </h3>
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="{{route('patients.search')}}" method="post">
    @if(Auth::user()->role_id >= 2 )
        @csrf
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Rechercher" aria-label="Rechercher" aria-describedby="btnNavbarSearch" name="search" value="{{old('search')}}" required>
            <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search-plus"></i></button>
        </div>
    @endcan

    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item"><a class="nav-link text-white" href="{{route('user.show')}}"><i class="fas fa-user-cog fa-1x"></i></a></li>
    </ul>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item"><a class="nav-link text-danger" href="{{route('user.logout')}}"><i class="fas fa-power-off fa-1x"></i></a></li>
    </ul>
</nav>
