<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{csrf_token()}}" >
  <title>CENA-Elections Legislatives</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">

  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  @yield('css');

  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#"><span>Elections</span> Legislatives</a>
      </div>
    </div><!-- /.container-fluid -->
  </nav>
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
      <div class="profile-userpic">
        <img src="/profil.jpeg" class="img-responsive" alt="">
      </div>
      <div class="profile-usertitle">
        <div class="profile-usertitle-name">{!!Auth::user()->nom !!} <br>{!!Auth::user()->prenom !!}</div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
      </div>
      <div class="clear"></div>
    </div>
      <div class="divider"></div>
    <ul class="nav menu">
      <li class="{{route_active('accueilCena')}}"><a href="{{route('accueilCena')}}"><em class="fa fa-dashboard">&nbsp;</em> Accueil</a></li>
      <li class="parent {{route_active('inscription')}} {{route_active('liste')}} {{route_active('profil')}}"><a data-toggle="collapse" href="#sub-item-1"><em class="fa fa-user">&nbsp;</em>Agents<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul class="children collapse" id="sub-item-1">
          <li><a class="" href="{{ route('inscription') }}">
            <span class="fa fa-arrow-right">&nbsp;</span>Inscrire un agent
          </a></li>
        <li><a class="" href="{{ route('liste') }}">
            <span class="fa fa-arrow-right">&nbsp;</span> Voir la liste des agents
          </a></li>
        </ul>
      </li>

      <li class="{{route_active('config')}}">
        <a href="{{route('config')}}">
          <em class="fa fa-cog">&nbsp;</em>Configurer l'élection
        </a>
      </li>

      <li class="parent {{route_active('general')}} {{route_active('resultatC')}}"><a data-toggle="collapse" href="#sub-item-2"><em class="fa fa-bar-chart">&nbsp;</em> Resultats<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul class="children collapse" id="sub-item-2">
          <li><a class="" href="{{route('general')}}">
            <span class="fa fa-arrow-right">&nbsp;</span>General
          </a></li>
          <li><a class="" href="{{route('resultatC')}}">
            <span class="fa fa-arrow-right">&nbsp;</span>Communal
          </a></li>
          
        </ul>
      </li>
      <li class="{{route_active('rapports')}}">
        <a href="{{route('rapports')}}">
          <em class="fa fa-paperclip">&nbsp;</em>Documents
        </a>
      </li>
      <li>
        <a class="fa fa-power-off" href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
        </form>
      </li>
    </ul>
  </div><!--/.sidebar-->

    <div class="row">
      @yield('content');
      <script src="js/jquery-1.11.1.min.js"></script>
      <script src="js/jquery-3.2.1.min.js"></script>
      @include('flashy::message')
      

    </div><!--/.row-->

  <script src="js/larails.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>  
  @yield('js');
</body>
</html>
