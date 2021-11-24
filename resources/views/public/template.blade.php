@include('template.header')
<body>
    <video playsinline autoplay muted loop id="bgvid">
        <source src="../videos/background-01.mp4" type="video/mp4">
            Votre navigateur ne supporte pas l'extension vidéo
    </video>
    <main class="d-flex w-100 bg-medical">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-12 col-sm-12 col-md-10 col-lg-6 col-xl-5 col-xxl-4 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="card" style="background-color: #1A263D; border-radius: 25px !important;">
							<div class="card-body">
								<div class="m-sm-4 row">
                                    <div class="col-12 col-lg-12">
                                        <div class="tab">
                                            <ul class="nav nav-tabs bg-grey radius" role="tablist">
                                                <li class="nav-item col-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
                                                    <a class="nav-link text-center radius active" href="#connexion" data-bs-toggle="tab" role="tab">Connexion</a>
                                                </li>
                                                <li class="nav-item col-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
                                                    <a class="nav-link text-center radius" href="#password" data-bs-toggle="tab" role="tab">Mot de passe</a>
                                                </li>
                                            </ul>
                                            <div class="text-center mb-3">
                                                <img src="{{asset('/images/logo/logo.png')}}" alt="Logo PathologIA" class="img-fluid rounded-circle" width="300" height="300" />
                                            </div>
                                            @error('error')
                                            <div class="alert alert-danger alert-outline alert-dismissible" role="alert">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                <div class="alert-icon"><i class="far fa-bell"></i></div>
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
                                            <div class="tab-content bg-transparent">
                                                <div class="tab-pane active" id="connexion" role="tabpanel">
                                                    @include('public.login')
                                                </div>
                                                <div class="tab-pane" id="password" role="tabpanel">
                                                    @include('public.password')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
