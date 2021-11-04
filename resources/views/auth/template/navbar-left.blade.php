<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-primary min-vh-100" style="width: 280px;">
    <a href="{{route('home.show')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4 text-white">Menu</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item @if(Route::is('user.show')) active @endif">
            <a href="{{route('user.show')}}" class="nav-link text-white" aria-current="page">
                <i class="fa fa-user"></i> <span class="align-middle">Mon Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('user.logout')}}" class="nav-link btn text-danger" aria-current="page">
                <i class="fas fa-sign-out-alt"></i>Me déconnecter</a>
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="{{route('user.show')}}" class="nav-link text-white">
        <img src="https://avatars.githubusercontent.com/u/28137905?v=4" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>{{$user->firstname}} {{$user->lastname}}</strong>
      </a>
    </div>
  </div>