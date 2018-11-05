@extends('layouts.master')


@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">   
    <div class="row mt">
            <div class="col-md-12">
                <div class="panel panel-primary">
        <div class="panel-heading">Rapports reçu</div>
        <div class="panel-body">
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  
                                  <th class="hidden-phone"><i class="fa fa-address-card"></i> Auteur</th>
                                  
                                  <th><i class=" fa fa-edit"></i> Options</th>
                              </tr>
                              </thead>
                              <tbody>
                              
                              @for($i=0;$i<$nb;$i++)

                                <tr>
                                  <td class="hidden-phone">{{$users[$i]}}</td>
                                  <td>
                                    <a href= "{{$raps[$i]->chemin}}" class="btn btn-success btn-xs"><i class="fa fa-arrow-down"></i>Télécharger</a>
                                  </td>
                              </tr>
                    
                              @endfor
                              
                              </tbody>
                          </table>

                         </div>
                         {{$raps->links()}}
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
      </div><!-- /.col-->
    </div><!-- /.row -->


@stop
