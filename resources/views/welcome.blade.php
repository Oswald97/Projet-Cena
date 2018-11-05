<!--<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>-->

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="accueil/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="accueil/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="accueil/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="accueil/css/landing-page.min.css" rel="stylesheet">
        <style>
            .full-height {
                height: 5vh;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            
            }
        </style>
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <p class="full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </p>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Les Elections Législative à l'ère du numérique</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto"></div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row" style="border-collapse: none; ">
          <div class="col-lg-4 to" style="box-shadow: 5px 10px 18px #888888; background-color: rgb(105;105;105);  margin-right: 20px; border: solid silver 1px;border-radius: 5px">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-list m-auto text-primary"></i>
              </div>
              <h3>Liste électorale</h3>
              <p class="lead mb-0">Retrouvé l'ensemble détaillé des <a href="#">listes</a> proposées par chaque partie et validé par la CENA</p>
            </div>
          </div>
          <div class="col-lg-3 to" style="box-shadow: 5px 10px 18px #888888; background-color: rgb(105;105;105);  border: solid silver 1px;border-radius: 5px">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-exclamation m-auto text-primary"></i>
              </div>
              <h3>VOTE</h3>
              <p class="lead mb-0">Vous voulez faire valloir votre voix? <a href="#">Consulter</a> la liste de l'ensemble des Centres de vote, réparti sur l'ensemble du territoire National</p>
            </div>
          </div>
          <div class="col-lg-4 to"  style="box-shadow: 5px 10px 18px #888888; background-color: rgb(105;105;105); margin-left:20px; border: solid silver 1px;border-radius: 5px">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-pie-chart m-auto text-primary"></i>
              </div>
              <h3>Statistiques</h3>
              <p class="lead mb-0">Obtenez en temps réelle les <a href="#">résultats</a> issu du scrutin de vote</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('accueil/img/juge2.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Fiabilité</h2>
            <p class="lead mb-0">Un système sécuritaire et fonctionnel pour des élections sans <em>fraudes</em>. Plus d'electeurs fantômes plus de résultats compromis</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img"style="background-image: url('accueil/img/img7.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>CENA</h2>
            <p class="lead mb-0">Des élections en toute transparence sous l'égide la CENA. La Commission électorale Nationale Autonome assure le respect des lois et la transparence du scrutin des élections législatives...</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('accueil/img/img1.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Votez massivement </h2>
            <p class="lead mb-0">Effectuer votre devoir civique pour le bien de la Nation. Chaque voix compte,rendez vous massivement dans les bureau de vote et votez pour le candidats de votre choix...</p>
          </div>
        </div>
      </div>
    </section>
 <div ><br><br></div>

    <!-- Call to Action -->
   <section class="features-icons bg-light text-center">
      <div class="container" style="background-color: rgb(209;209;209); text-align: center;">
        <br>
        <br>
             <h2 class="mb-6">Nous contacter</h2>
        <div class="row" style="border-collapse: none; ">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex" >
                <i class="icon-location-pin m-auto text-primary"></i>
              </div>
              <p style="color: silver;font-size: 25px;"><strong>ADRESSE</strong></p>
              <p class="lead mb-0">Boulevard de la Marina, Cotonou</p>
            </div>
          </div>
          <div class="col-lg-4" style="box-shadow: 0.6px;  border-right: solid grey 1px;border-left: solid grey 1px;">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex" >
                <i class="icon-phone m-auto text-primary"></i>
              </div>
              <p style="color: silver;font-size: 25px;"><strong>TÉLÉPHONE</strong></p>
              <p class="lead mb-0">+229 XXX XXX XX</p>
              <p class="lead mb-0">+229 XXX XXX XX</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex" >
                <i class="icon-user-follow m-auto text-primary"></i>
              </div>
              <p style="color: silver;font-size: 25px;"><strong>Contact</strong></p>
              <p class="lead mb-0">
                <a href="#">
                  <i class="fab fa-facebook fa-2x fa-fw"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram fa-2x fa-fw"></i>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <p class="text-muted small mb-4 mb-lg-0">&copy;2018 Site de la CENA, tous droit réservé.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="accueil/vendor/jquery/jquery.min.js"></script>
    <script src="accueil/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

