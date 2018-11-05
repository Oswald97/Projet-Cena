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
                <form method="POST" action="{{ route('inscrit') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-34">
                        S'inscrire
                    </span>
                    <ul>
                        <li>
                            <div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                            <input class="input100" id="name" type="text" placeholder="Nom" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            <span class="focus-input100"></span>
                            </div>
                        </li>
                        <li>
                            <div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                            <input class="input100" id="prenom" type="text" placeholder="Prenom" name="prenom" value="{{ old('prenom') }}" required autofocus>
                                @if ($errors->has('prenom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            <span class="focus-input100"></span>
                            </div>
                        </li>
                        <li>
                            <div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                            <input class="input100" id="email" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <span class="focus-input100"></span>
                            </div>
                        </li>

                        <li>
                            <div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                            <input class="input100" id="telephone" type="text" placeholder="Telephone" name="telephone" value="{{ old('telephone') }}" required autofocus>
                                @if ($errors->has('telephone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            <span class="focus-input100"></span>
                            </div>
                        </li>

                        <li>
                            <div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                            <input class="input100" id="code" type="text" placeholder="Code" name="code" value="{{ old('code') }}" required autofocus>
                            <span class="focus-input100"></span>
                            </div>
                        </li>


                        <li>
                           <div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type password">
                                <input class="input100" id="password" type="password" placeholder="Mot de passe" name="password" required autofocus>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100"></span>
                            </div>
                        </li>

                        <li>
                           <div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type password">
                                <input class="input100" id="password-confirm" type="password" placeholder="Confirmation" name="password-confirm" required autofocus>
                                <span class="focus-input100"></span>
                            </div>
                        </li>
                    </ul>

                    <div class="container-login100-form-btn">

                        <button type="submit" class="login100-form-btn">
                            Inscription
                        </button>
                    </div>

                    <div class="w-full text-center p-t-27 p-b-239">
                        <span class="txt1">Vous avez déjà un compte?</span>
                        <a href="\login" class="txt2"><!--losrqu'on à déja un compte on peut directement se connecter-->
                            <b>Connexion</b>
                        </a>
                    </div>

                </form><!--les données sont envoyer vers la page save_pass.php-->

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
