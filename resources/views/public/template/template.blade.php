@include('public.template.header')
<body>
    <main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="https://icones.pro/wp-content/uploads/2021/03/symbole-du-docteur-icone-png-vert.png" alt="Logo PathologIA" class="img-fluid" width="300" height="300" />
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
									@yield('public.login.show')
									@yield('public.reset.show')
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
