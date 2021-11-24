@include('template.header')
<body>
    <video playsinline autoplay muted loop id="bgvid">
        <source src="../../videos/background-01.mp4" type="video/mp4">
            Votre navigateur ne supporte pas l'extension vidéo
    </video>
    <div class="container-fluid toggled" id="wrapper">
        <div class="row">
            <div id="sidebar-wrapper" class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-3 col-xxl-2 p-0">
                @include('template.navbar-left')
            </div>
            <div id="page-content-wrapper" class="col-6 col-sm-7 col-md-8 col-lg-9 col-xl-9 col-xxl-10">
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
                @yield('auth.widget.interface.show')
                @yield('auth.user.profil.show')
                @yield('auth.admin.user.interface.show')
            </div>
        </div>
    </div>
    @include('template.footer')
</body>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</html>
