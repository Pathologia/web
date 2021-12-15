<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
      <br>
      <h5 class="offcanvas-title">PathologIA</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <hr class="mt-0">
    <div class="offcanvas-body row">
        <div class="col-lg-12">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('home.show')}}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                      Tableau de bord
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('resultats.show')}}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2" aria-hidden="true"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                      Résultats
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('patients.show')}}">
                        <i class="fas fa-user-md"></i>
                      Patients
                    </a>
                  </li>

                  @if(Auth::user()->role_id === 1)
                  <li class="nav-item"><hr></li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('users.create')}}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                      Gestion utilisateurs
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('historyconnections.show')}}">
                        <i class="fas fa-chart-line"></i> Historique des connexions
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('historyactivitys.show')}}">
                        <i class="fas fa-chart-line"></i> Historique des activités
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('roles.show')}}">
                        <i class="fas fa-project-diagram"></i> Gestion de rôles
                    </a>
                  </li>
                  @endif
                </ul>
              </div>
        </div>
    </div>
</div>
