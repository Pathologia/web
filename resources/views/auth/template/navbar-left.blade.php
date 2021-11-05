<div id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-medium radius-right min-vh-100">
    <ul class="nav flex-column mb-auto">
        <li class="nav-item @if(Route::is('user.show')) active @endif">
            <a href="{{route('home.show')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4 text-white">Menu</span>
            </a>
        </li>
    </ul>
    <hr>
    <div class="mb-3">
        <ul class="nav flex-column mb-auto">
            <li class="nav-item text-center">
                <a href="{{route('user.show')}}" class="nav-link text-white">
                    <img src="@if(!empty($user->picture)) {{$user->picture}} @else {{asset('images/logo/cerveau.png')}} @endif" alt="Avatar" width="32" height="32" class="rounded-circle me-2">
                    <strong>{{$user->firstname}} {{$user->lastname}}</strong>
                </a>
            </li>
            <li class="nav-item text-center">
                <a href="{{route('user.logout')}}" class="btn text-danger"">
                    <i class="fas fa-sign-out-alt"></i>Me déconnecter</a>
                </a>
            </li>
        </ul>
    </div>
  </div>
