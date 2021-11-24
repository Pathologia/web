@extends('public.template')
@section('errors.405.show')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 m-5 text-center">
            <h1>Erreur 405</h1>
            <p>Méthode non allouée.</p>
            <p>Vous utilisez la mauvaise méthode pour consulter vos données.</p>
            <p>Si le problème persiste, merci de contacter votre administrateur de développement</p>
        </div>
    </div>
</div>
@endsection
