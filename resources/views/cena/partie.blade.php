@extends('layouts.master')


@section('content')



  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        
    <div class="row">
      <div class="col-lg-12">
        <h2>Parties Politique</h2>
      </div>
    </div>
      <div class="row" style="margin: auto; width: 750px; padding-bottom: 60px;">
      <div class="col-lg-12">
                <div class="panel panel-primary">
          <div class="panel-heading">Liste des Parties</div>
          <div class="panel-body">
                          <table class="table table-striped table-advance table-hover" id="partie_table">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-map-marker"></i>Sigle</th>
                                  <th class="hidden-phone"><i class="fa fa-edit"></i> Option</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($parties as $partie)
                                
                                  <tr>
                                    <td>{{$partie->nom_partie}}</td>
                                    <td>
                                      <form action="#" method="POST" class="login100-form validate-form" >
                                        @csrf
                                        <input type="hidden" value="{{$partie->id}}" id="utilisateur" name="utilisateur">
                                        <button type="submit" class="btn btn-primary btn-xs">
                                          <i class="fa fa-eye"></i>
                                        </button>
                                      </form>


                                      <a class="btn btn-danger btn-xs" href="{{route('liste.destroy', $partie)}}" data-method="DELETE" data-confirm="Voulez-vous vraiment supprimer ce Partie politique?" ><i class="fa fa-trash"></i></a>
                          
                                      </form>
                                  </td>
                                  </tr>
                              @endforeach
                              </tbody>
                          </table>
                         </div>

                         <div class="modal fade" role="dialog" id="partieModal" >

                          <div class="modal-dialog">

                            <div class="modal-content">

                              <form  action="{{route('ajout')}}" method="post" id="partie_form">
                                <div class="modal-header" >
                                  <button class="close" data-dismiss="modal" type="button" >x</button>
                                  <h4 class="modal-title">Ajouter un nouveau partie politique</h4>
                                </div>
                                <div class="modal-body">
                                  @csrf
                                  <span id="form_output"></span>
                                  <label > Entrer le Sigle du partie</label>
                                  <input type="text" class="form-control" id="sigle" name="sigle">
                                </div>
                                <div class="modal-footer">
                                  <input type="hidden" id="button_action" name="button_action" value="insert">
                                  <input type="submit" class="btn btn-info" name="submit" id="action" value="Add">
                                  <button class="btn btn-default" type="button" data-dismiss="modal">Fermer</button>
                                </div>
                              </form>
                              
                            </div>
                            
                          </div>
                           
                         </div>
                         
                      </div><!-- /content-panel -->
                         <div class="col-md-8">
                           <button class="btn btn-primary" type="button" id="add_data" name="add" >Ajouter</button>
                         </div>
                  </div><!-- /col-md-12 -->
    </div><!--/.row-->
  </div>


@stop
