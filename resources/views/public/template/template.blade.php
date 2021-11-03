@include('public.template.header')
<body>
    <main class="d-flex w-100 bg-medical">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-12 col-sm-12 col-md-10 col-lg-6 col-xl-5 col-xxl-4 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="card" style="background-color: #1A263D; border-radius: 25px !important;">
							<div class="card-body">
								<div class="m-sm-4">
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
