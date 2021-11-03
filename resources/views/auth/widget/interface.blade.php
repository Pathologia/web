@extends('auth.template')
@section('auth.menu.interface.show')
<div class="container-fluid">
    <div class="row mb-2 mb-xl-3">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2 col-xxl-2">
                            <a href="{{$widget->url_interne ?? $widget->url_externe}}" target="_blank" style="text-decoration:none">
                                <div class="card widget">
                                    <div class="card-body text-center">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">{{$widget->libelle}}</h5>
                                            </div>
                                        </div>
                                        <img src="{{asset('img/widgets/'.$widget->icon_fa.'.svg')}}" alt="{{$widget->libelle}}" class="text-center img-fluid rounded-circle mb-2" style="background-color: rgb({{$widget->couleur_rgb}}); width:60px !important; height:60px !important;">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
