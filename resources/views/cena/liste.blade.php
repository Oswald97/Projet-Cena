@extends('layouts.master')

@section('content')
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">Agents enregistrés</div>
          <div class="panel-body">
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-user"></i> Nom</th>
                                  <th><i class="fa fa-user"></i> Prénom</th>
                                  <th><i class="fa fa-phone"></i> Contact</th>
                                  <th><i class="fa fa-paperclip"></i> Mail</th>
                                  <th><i class="fa fa-id-badge"></i> Rôle</th>
                                  <th><i class="fa fa-edit"></i> Options</th>
                              </tr>
                              </thead>
                              <tbody>

                              @for($i=0;$i<$nb;$i++)
                              <tr>
                                  <td>{{$users[$i]->nom}}</td>
                                  <td class="hidden-phone">{{$users[$i]->prenom}}</td>
                                  <td>{{$users[$i]->telephone}}</td>
                                  <td class="hidden-phone">{{$users[$i]->email}}</td>
                                  <td class="hidden-phone">
                                    @if($users[$i]->hasrole("Membre Cena"))
                                    {!!"Membre Cena"!!}
                                  
                                    @elseif($users[$i]->hasrole("Chef Arrondissement"))
                                      {!!"Chef Arrondissement"!!}
                                    
                                    @elseif($users[$i]->hasrole("Chef Bureau"))
                                      {!!"Chef Bureau"!!}
                                    
                                    @elseif($users[$i]->hasrole("Chef Centre"))
                                      {!!"Chef Centre"!!}
                                    
                                    @endif

                                  </td>
                                  <td>
                                      <form action="{{route('profil')}}" method="POST" class="login100-form validate-form" >
                                        @csrf
                                        <input type="hidden" value="{{$users[$i]->id}}" id="utilisateur" name="utilisateur">
                                        <button type="submit" class="btn btn-primary btn-xs">
                                          <i class="fa fa-eye"></i>
                                        </button>
                                      </form>


                                      <a class="btn btn-danger btn-xs" href="{{route('liste.destroy', $users[$i])}}" data-method="DELETE" data-confirm="Voulez-vous vraiment supprimer cet agent?" ><i class="fa fa-trash"></i></a>
                          
                                      </form>
                                  </td>
                              </tr>
                              @endfor
          
                              </tbody>
                          </table>
                          {{$users->links()}}
                         </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div>
            </div>
@stop
