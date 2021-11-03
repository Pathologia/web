@extends('auth.template.template')
@section('auth.widget.interface.show')
<div class="container-fluid">
    <div class="row mb-2 mb-xl-3">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="row">
                        @foreach ($widgets as $widget)
                            @if(!isset($widget->archived_at))
                                {{-- @foreach ($user_groupes as $user_groupe)
                                @if(!isset($widget->archived_at) && $widget->role_id === $user->role_id || ($widget->groupe_id === $user_groupe->groupe_id && $user_groupe->user_id === $user->id) && !isset($widget->archived_at)) --}}
                                <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2 col-xxl-2">
                                    <a href="{{$widget->url_intern ?? $widget->url_extern}}" target="_blank" style="text-decoration:none">
                                        <div class="card widget">
                                            <div class="card-body text-center">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">{{$widget->libelle}}</h5>
                                                    </div>
                                                </div>
                                                <img src="{{asset('img/widgets/'.$widget->icon.'.png')}}" alt="{{$widget->libelle}}" class="text-center img-fluid rounded-circle mb-2" style="background-color: rgb({{$widget->rgba_color}}); width:60px !important; height:60px !important;">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                {{-- @endif
                                @endforeach --}}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
