<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Free coming soon template with jQuery countdown">

  <title>Webuild - Free Bootstrap coming soon template with countdown</title>

  <!-- Bootstrap -->
  <link href="WeBuild/assets/css/bootstrap.css" rel="stylesheet">
  <link href="WeBuild/assets/css/bootstrap-theme.css" rel="stylesheet">
  <link href="WeBuild/assets/css/font-awesome.css" rel="stylesheet">

  <!-- siimple style -->
  <link href="WeBuild/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: WeBuild
    Theme URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Cena</h1>
          <h2 class="subtitle">Veuillez patienter....   <br>Les élection débuteront dans</h2>
          <div id="countdown"></div>

          <div>
            <a class="btn btn-primary" href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            {{ __('Déconnexion') }}
        </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
        </form>
          </div>
          

          <div class="social">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <p class="copyright">&copy; GIT-3</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact. 
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=WeBuild
            -->
            Cena <a href="#">Elections</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="WeBuild/assets/js/bootstrap.min.js"></script>
  <script src="WeBuild/assets/js/jquery.countdown.min.js"></script>
  <script type="text/javascript">
    $('#countdown').countdown( '{{$date}}' , function(event) {
      $(this).html(event.strftime(' %w semaines %d jours <br /> %H:%M:%S'));
    });
  </script>

  <script src="WeBuild/contactform/contactform.js"></script>

</body>

</html>
