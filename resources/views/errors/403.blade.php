@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))


@extends('public.template')
@section('errors.403.show')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 m-5 text-center">
            <h1>Erreur 403</h1>
            <p>Vous n'êtes pas authorisé à accéder à cette ressource.</p>
            <p>Si le problème persiste, merci de contacter votre administrateur de développement.</p>
        </div>
    </div>
</div>
@endsection
