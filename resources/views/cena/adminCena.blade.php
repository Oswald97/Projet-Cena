@extends('layouts.master')


@section('content')
      <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Accueil</h1>
      </div>
    </div><!--/.row-->
    
    <div class="panel panel-container">
      <div class="panel-heading"> Resumé</div>
          <div class="panel-body">
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
          <div class="panel panel-teal panel-widget border-right">
            <div class="row no-padding"><em class="fa fa-xl fa-address-card color-blue"></em>
              <div class="large">{{$nb}}</div>
              <div class="text-muted">Agents</div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
          <div class="panel panel-blue panel-widget border-right">
            <div class="row no-padding"><em class="fa fa-xl fa-map color-orange"></em>
              <div class="large">{{$nbDep}}</div>
              <div class="text-muted">Departements</div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
          <div class="panel panel-orange panel-widget border-right">
            <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
              <div class="large">108</div>
              <div class="text-muted">Deputé</div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
          <div class="panel panel-red panel-widget ">
            <div class="row no-padding"><em class="fa fa-xl fa-line-chart color-red"></em>
              <div class="large">100%</div>
              <div class="text-muted">Statistiques</div>
            </div>
          </div>
        </div>

      </div><!--/.row-->
    </div>
    </div>
  
  </div>  <!--/.main-->
@stop
