@extends('layouts.master')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        
    <div class="row">
      <div class="col-lg-12">
        <h2>Résultat par commune</h2>
      </div>
    </div>
      <div class="row" style="margin: auto; width: 750px; padding-bottom: 60px;">
      <div class="col-lg-12">
                <div class="panel panel-primary">
          <div class="panel-heading">Liste des communes</div>
          <div class="panel-body">
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-map-marker"></i> Commune</th>
                                  <th class="hidden-phone"><i class="fa fa-edit"></i> Option</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              @for($i=0;$i<$nb;$i++)
                                <form action="{{route('resultatC')}}" method="post">
                                  @csrf
                                  <tr>
                                    <td>{{$communes[$i]->nom_commune}}</td>
                                    <td>
                                        <button class="btn btn-info btn-xs"><i class="fa fa-arrow-right"></i></button></a>

                                        <input type="hidden" value="{{$communes[$i]->id}}" id="idCom" name="idCom">
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
