<nav id="sidebar" class="sidebar js-sidebar text-white bg-medium radius-right" style="overflow-y: hidden; overflow-x: hidden;">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand text-center" href="{{route('home.show')}}"><span>Patholog <strong>IA</strong></span></a>
        <div class="sidebar-user">
            <div class="d-flex justify-content-center">
                <div class="flex-grow-1 ps-2">
                    <h3 class="sidebar-user-title">{{$user->firstname}} {{$user->lastname}}</h3>
                    @foreach ($roles as $role)
                        @if($role->id === $user->role_id)
                            <h4 class="sidebar-user-title">{{$role->libelle}}</h4>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Menu</li>
            <li class="sidebar-item @if(Route::is('home.show')) active @endif">
                <a class="sidebar-link bg-transparent" href="{{route('home.show')}}"><i class="fas fa-home"></i> <span class="align-middle"> Accueil</span></a>
            </li>
            <li class="sidebar-header">Compte</li>
            <li class="sidebar-item @if(Route::is('user.show')) active @endif">
                <a class="sidebar-link bg-transparent" href="{{route('user.show')}}"><i class="fas fa-users-cog"></i> <span class="align-middle"> Mon profil</span></a>
            </li>
            <li class="sidebar-item"><br></li>
            <li class="sidebar-header">Déconnexion</li>
            <li class="sidebar-item">
                <a class="dropdown-item btn text-danger" href="{{route('user.logout')}}"><i class="fas fa-sign-out-alt"></i> Me déconnecter</a>
            </li>
        </ul>
    </div>
</nav>
