@extends('emails.template')
@section('emails.reset-password.show')
<title>Nouveau mot de passe | PathologIA</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('images/logo/logo.png')}}" class="img-fluid rounded-circle text-center mb-2" width="200" height="200" />
                    </div>
                    <h1>Génération de votre nouveau mot de passe du compte PathologIA</h1>
                    <hr>
                    <h4>Bonjour {{$user->firstname}} {{$user->lastname}},</h4>
                    <p class="text-center">
                        Votre nouveau mot de passe pour votre compte PathologIA à bien été généré.
                        <br>
                        Voici vos nouvelles informations de connexion:
                        <br>
                        <table class="table table-responsive-sm table-responsive-md table-responsive table-striped" style="width:100%">
                            <tbody>
                                <tr>
                                    <th>Mot de passe (provisoir)</th>
                                    <td>{{$password}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <hr>
                        <h2 class="fw-bold">Merci de changer de mot de passe dès votre prochaine connexion</h2>. <br>
                        Vous pouvez vous connecter à l'adresse suivante: <a href="https://pathologia.services-ehe.fr">https://pathologia.services-ehe.fr</a>
                    </p>
                    <p class="mb-5">
                        Cordialement,
                        <br>
                        Groupe PathologIA / <a href="mailto:sendmail.hackenathonsystem@gmail.com">sendmail.hackenathonsystem@gmail.com</a>
                    </p>
                    <br><br>
                    <p class="mt-5 font-weight-light font-italic">Message envoyé automatiquement par le système de gestion PathologIA</p>
                </div>
            </div>
        </div>
    </main>
@endsection
