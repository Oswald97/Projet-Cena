@extends('layouts.master')
@section('content')

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <div class="col-md-12">
        <div id="app">
          {!! $chart->container() !!}
        </div>
      </div>
    </div>
<!--
    <div class="row">
      <div class="col-md-12">
        <div id="app">
          {!! $circle->container() !!}
        </div>
      </div>
    </div>
-->
    <div class="row">
      <div class="col-md-12 ">
        <div class="panel panel-primary">
          <div class="panel-heading">Sièges attribués à chaque Parti Politique</div>
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  @for($i=0;$i<$nb;$i++)
                    <th> {{$parties[$i]->nom_partie}} </th>
                  @endfor
                </tr>
              </thead>
              <tbody>
                <tr>
                  @for($i=0;$i<$nb;$i++)
                    <td class="hidden-phone">{{$sieges_partie[$i]}}</td>
                  @endfor
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  
  </div>
@stop

@section('js')

    <script src="js/consovelt.js" charset="utf-8"></script>
    {!! $chart->script() !!}
    {!! $circle->script() !!}
@stop
