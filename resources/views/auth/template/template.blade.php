@include('auth.template.header')
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2">
                @include('auth.template.navbar-left')
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-12">
                        @include('auth.template.navbar-top')
                    </div>
                    <div class="col-12">
                        @error('error')
                            <div class="alert alert-danger alert-outline alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
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
        </div>
    </div>
</body>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ mix('/js/app-export.js') }}"></script>
@include('auth.template.footer')
</html>
