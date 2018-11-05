@extends('layouts.centre')

@section('content')
  
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        
    <div class="row">
      <div class="col-lg-12">
        <h2>Résultat par bureau de vote</h2>
      </div>
    </div>
    <div class="row col-lg-12" style="margin: auto; width: 750px; padding-bottom: 60px;">
      <div class="col-lg-12 col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">Liste des bureaux</div>
            <div class="panel-body">
              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th><i class="fa fa-map-marker"></i> Bureaux</th>
                    <th class="hidden-phone"><i class="fa fa-edit"></i> Voir</th>
                  </tr>
                </thead>
                <tbody>
                  @for($i=0;$i<$nb;$i++)
                    <form action="{{route('resultatB')}}" method="post">
                      @csrf
                      <tr>
                        <td>{{$bureaux[$i]->numero}}</td>
                        <td>
                          <button class="btn btn-info btn-xs"><i class="fa fa-arrow-right"></i></button></a>
                          <input type="hidden" value="{{$bureaux[$i]->id}}" id="idB" name="idB">
                        </td>
                      </tr>
                    </form>
                  @endfor
                </tbody>
              </table>
            </div>
          </div><!-- /content-panel -->
        </div><!-- /col-md-12 -->
    </div><!--/.row-->
  </div>
@stop
