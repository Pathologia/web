@include('template.header')
<body class="bg-secondary">
    <div class="container-fluid toggled" id="wrapper">
        <div class="row">
            <div id="page-content-wrapper" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                @include('template.navbar-left')
                @include('template.navbar-top')
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
                @yield('auth.user.profil.show')
                @yield('auth.admin.user.interface.show')
                @yield('auth.menu.show')
            </div>
        </div>
    </div>
    {{-- @include('template.footer') --}}
</body>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</html>
