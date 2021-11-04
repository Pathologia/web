@extends('emails.template')
@section('emails.generate-account.show')
<title>Nouveau compte PathologIA</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('images/logo/logo.png')}}" class="img-fluid rounded-circle text-center mb-2" width="200" height="200" />
                    </div>
                    <h1>Génération de votre compte PathologIA</h1>
                    <hr>
                    <h4>Bonjour {{$user->prenom}} {{$user->nom}},</h4>
                    <p class="text-center">
                        Votre compte PathologIA à bien été créé.
                        <br>
                        Voici vos informations de connexion:
                        <br>
                        <table class="table table-responsive-sm table-responsive-md table-responsive table-striped" style="width:100%">
                            <tbody>
                                <tr>
                                    <th>Identifiant</th>
                                    <td>{{$user->username}}</td>
                                </tr>
                                <tr>
                                    <th>Mot de passe (provisoir)</th>
                                    <td>{{$password}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <hr>
                        <a class="text-center" href="{{URL::signedRoute('signed.email.verify', ['email'=>$user->email, 'id'=>$user->id])}}"><i class="fas fa-arrow-right"></i> <h3>Merci de vérifier votre adresse email</h3> <i class="fas fa-arrow-left"></i></a>
                        <br><br>
                        <h2 class="fw-bold">Merci de changer de mot de passe dès votre première connexion</h2>. <br>
                        Vous pouvez vous connecter à l'adresse suivante: <a href="https://pathologia.ynov.com">https://pathologia.ynov.com</a>
                    </p>
                    <p class="mb-5">
                        Cordialement,
                        <br>
                        Groupe PathologIA / <a href="mailto:contact@pathologia.fr">contact@pathologia.fr</a>
                    </p>
                    <br><br>
                    <p class="mt-5 font-weight-light font-italic">Message envoyé automatiquement par le système de gestion PathologIA</p>
                </div>
            </div>
        </div>
    </main>
@endsection
