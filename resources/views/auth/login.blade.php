<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gest student</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="logi/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logi/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logi/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logi/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logi/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logi/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logi/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logi/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logi/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logi/css/util.css">
    <link rel="stylesheet" type="text/css" href="logi/css/main.css">
<!--===============================================================================================-->
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="post" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-34">
                        Connexion
                    </span>
                    <ul>
                        <!--Champs à renseigner pour se connecter à la plateforme: le login (qui est un N°matricule pour les étudiants et un email pour les professeur ); l'ecole (ecole de l'étudiant ou de l'administrateur ) et le mot de passe -->
                        <li>
                            <div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
                                <input id="email" class="input100" type="email" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100"></span>
                            </div>
                        </li>
                        <li>
                            <div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" data-validate="Type password">
                                <input id="password" class="input100" type="password" name="password" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                <span class="focus-input100"></span>
                            </div>
                        </li>
                    </ul>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Connexion
                        </button>
                    </div>

                    <div class="w-full text-center p-t-27 p-b-239">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Mdp oublié ?') }}
                        </a>

                        <!--lien vers la page d'inscription. sur cette page on valide son compte en renseignant un mot de passe-->
                        <a class="btn btn-link" href="/register">
                            {{ __('Inscription ?') }}
                        </a>

                    </div>
                </form><!--les données son envoyées vers la page traitement_connexion.php-->


                        <!--script php pour commenter les erreurs: lorsque l'utilisateur renseigne un mauvais login ou un mot de passe erroné un alert lui indique son erreur-->
                <div class="login100-more" style="background-image: url('logi/images/bg-01.jpg');"></div>
            </div>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
    <script src="logi/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="logi/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="logi/vendor/bootstrap/js/popper.js"></script>
    <script src="logi/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="logi/vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
<!--===============================================================================================-->
    <script src="logi/vendor/daterangepicker/moment.min.js"></script>
    <script src="logi/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="logi/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="logi/js/main.js"></script>

</body>
</html>
