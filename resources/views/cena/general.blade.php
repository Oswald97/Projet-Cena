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
  </div>
@stop

@section('js')

    <script src="js/consovelt.js" charset="utf-8"></script>
    {!! $chart->script() !!}
@stop
