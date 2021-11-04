<div class="d-flex flex-column align-items-sm-start px-3 pt-2 min-vh-100 bg-gray">
    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
        <li><h3>{{$user->firstname}} {{$user->lastname}}</h3></li>
        <li class="sidebar-header">Menu</li>
        <li class="nav-item @if(Route::is('home.show')) active @endif">
            <a class="nav-link bg-transparent" href="{{route('home.show')}}"><i class="fas fa-home"></i> <span class="align-middle">Accueil</span></a>
        </li>
        <li class="nav-header">Compte</li>
        <li class="nav-item @if(Route::is('user.show')) active @endif">
            <a class="nav-link bg-transparent" href="{{route('user.show')}}"><i class="fas fa-users-cog"></i> <span class="align-middle">Mon profil</span></a>
        </li>
        <li class="nav-item">
            <a class="dropdown-item btn text-danger" href="{{route('user.logout')}}"><i class="fas fa-sign-out-alt"></i>Me déconnecter</a>
        </li>
    </ul>
</div> 