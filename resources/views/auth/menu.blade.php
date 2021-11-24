@extends('auth.template')
@section('auth.menu.show')
<div class="row">
    @include('auth.widget.result_graph')
    @include('auth.widget.informations')
    @include('auth.widget.nb_traitement')
</div>
@endsection
