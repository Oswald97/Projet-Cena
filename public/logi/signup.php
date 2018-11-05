<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gest student</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" action="save_pass.php" class="login100-form validate-form">
					<span class="login100-form-title p-b-34"> <!--formulaire pour valider son inscription : login, ecole,mot de passe, confirmer le mot de passe-->
						S'inscrire
					</span>
					<ul>
							<li>
							<div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
							<input class="input100" type="text" name="code" placeholder="Code"> 
							<span class="focus-input100"></span>
							</div>
						</li>
						<li>
							<div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
							<input id="first-name" class="input100" type="email" name="email" placeholder="E-mail"> 
							<span class="focus-input100"></span>
							</div>
						</li>
						
						<li>
                           <div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type password">
								<input class="input100" type="password" name="pass" placeholder="Password">
								<span class="focus-input100"></span>
							</div>
						</li>
							
						<li>
                           <div style="width: 100%" class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type password">
								<input class="input100" type="password" name="repass" placeholder="Confirm password">
								<span class="focus-input100"></span>
							</div> 
						</li>
					</ul>
					
					<div class="container-login100-form-btn">

						<button class="login100-form-btn">
							Sign up
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">Already have an account?</span>
						<a href="connexion.php" class="txt2"><!--losrqu'on à déja un compte on peut directement se connecter-->
							<b>Sign In</b>
						</a>
					</div>
                            
				</form><!--les données sont envoyer vers la page save_pass.php-->

				<div class="login100-more" style="background-image: url('login/images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>