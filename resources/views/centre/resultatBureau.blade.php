<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lumino UI Elements</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
        <img src="meo.jpg" class="img-responsive" alt="">
      </div>
      <div class="profile-usertitle">
        <div class="profile-usertitle-name">{!!Auth::user()->nom !!} <br>{!!Auth::user()->prenom !!}</div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
      <li class="active"><a href="{{ route('centre') }}"><em class="fa fa-dashboard">&nbsp;</em>Accueil</a></li>
      <li ><a href="{{ route('rapportC') }}"><em class="fa fa-cog">&nbsp;</em>Rapport</a></li>
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

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <div id="app">
                    {!! $chart->container() !!}
                </div>
            </div>
    </div>

  
  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
  <script>
  window.onload = function () {
  var chart2 = document.getElementById("bar-chart").getContext("2d");
  window.myBar = new Chart(chart2).Bar(barChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
};
  </script> 
  <script src="https://unpkg.com/vue"></script>
            <script>
                var app = new Vue({
                    el: '#app',
                });
            </script>
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
            {!! $chart->script() !!}
</body>
</html>
