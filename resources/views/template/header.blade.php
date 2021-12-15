<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Pathologia Corp">
	<meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>PathologIA</title>
	<link rel="shortcut icon" href="{{asset('images/logo/cerveau.png')}}" />

    <script src="{{ mix('/js/app.js') }}"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    {{-- <script src="{{ mix('/js/chart-area-demo.js') }}"></script> --}}
    <script src="{{ mix('/js/chart.js') }}"></script>
</head>
