@include('template.header')
<body>
    <div class="container-full mb-4">
        @include('template.navbar-left')
        @include('template.navbar-top')
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-10 offset-xxl-1 col-xl-12">
                @error('error')
                    <div class="alert alert-danger alert-outline alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <div class="alert-message">
                            {{$message}}
                        </div>
                    </div>
                @enderror
                @error('success')
                    <div class="alert alert-success alert-outline alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <div class="alert-icon"><i class="fas fa-check"></i></div>
                        <div class="alert-message">
                            {{$message}}
                        </div>
                    </div>
                @enderror
                @yield('auth.menu.show')
                @yield('auth.user.profil.show')
                @yield('auth.admin.user.interface.show')
                @yield('auth.admin.connection.interface.show')
                @yield('auth.admin.activity.interface.show')
                @yield('auth.admin.role.interface.show')
                @yield('auth.admin.resultat.interface.show')
                @yield('auth.patient.interface.show')
                @yield('auth.patient.information.show')
                @yield('auth.patient.liste.show')

            </div>
        </div>
    </div>
    @include('template.footer')
</body>
</html>
