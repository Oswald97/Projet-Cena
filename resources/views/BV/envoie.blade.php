@extends('layouts.bv')


@section('content')

    <div class="row">
      <div class="col-lg-12">
        <h2>Envoie de Résultats</h2>
      </div>
      <div class="row">
      <div style="margin-left: 30px;"class="col-md-8">
                <div class="panel panel-primary">
          <div class="panel-heading">Formulaire</div>
          <div class="panel-body">
                          
                              
                              <form role="form" method="post" action="{{ route('bureau.enregistre') }}" class="login100-form validate-form">
                                <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-map-marker"></i>Liste électorales</th>
                                  <th class="hidden-phone"><i class="fa fa-edit"></i>Résultats</th>
 
                              </tr>
                              </thead>
                                <tbody>

                              
                                @csrf
                                @for($i=0;$i<$nb;$i++)

                                  <tr>
                                      <td>{{$parties[$i]->nom_partie}}</td>
                                      <td>
                                        <input type="text" id="{{$parties[$i]->nom_partie}}" name="{{$parties[$i]->nom_partie}}" placeholder="Voix obtenues" required>
                                      </td>
                                  </tr>
                                @endfor
                                
                              </tbody>
                            </table>
                            <div style="text-align: right;">
                              <button type="submit" class="btn btn-primary">Submit Button</button>
                            </div>
                          </form>
                         </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
    </div><!--/.row-->

@stop
