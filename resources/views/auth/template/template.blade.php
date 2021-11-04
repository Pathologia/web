@include('auth.template.header')
<body>
    <video playsinline autoplay muted loop id="bgvid">
        <source src="../videos/background-01.mp4" type="video/mp4">
            Votre navigateur ne supporte pas l'extension vidéo
    </video>
	<div class="wrapper">
        @include('auth.template.navbar-left')
		<div class="main" style="z-index: 2; background: transparent">
			<nav class="navbar navbar-expand bg-radient-ehe">
                @include('auth.template.navbar-top')
			</nav>
			<main class="content">
				<div class="container-fluid p-0">
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

				</div>
			</main>
            @include('auth.template.footer')
		</div>
	</div>
</body>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ mix('/js/app-export.js') }}"></script>
</html>
