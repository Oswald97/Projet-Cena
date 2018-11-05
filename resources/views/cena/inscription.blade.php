@extends('layouts.master')

@section('content')
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Inscription des Agents</h1>
      </div>
    </div><!--/.row-->
        
    
    <div class="row" style="margin: auto; width: 500px; padding-bottom: 60px;">
      <div class="col-lg-12">
        <div class="panel panel-primary">
          <div class="panel-heading">Formulaire d'inscription</div>
          <div class="panel-body" >
            <form role="form" method="POST" action="{{ route('inscription') }}" class="login100-form validate-form">
              @csrf
                <div class="form-group">
                  <label><em class="fa fa-user">&nbsp;</em>Nom</label>
                  <input class="form-control" id="nom" type="text" placeholder="Nom" name="nom" value="{{ old('nom') }}" required >
                </div>
                <div class="form-group">
                  <label><em class="fa fa-user">&nbsp;</em>Prénoms</label>
                  <input class="form-control" placeholder="Prénoms" id="prenom" name="prenom" value="{{ old('prenom') }}" required>
                </div>
                
                <div class="form-group">
                  <label><em class="fa fa-paperclip">&nbsp;</em>E-mail</label>
                  <input type="email" class="form-control" placeholder="E-mail" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                  <label><em class="fa fa-id-badge">&nbsp;</em>Rôle</label>
                  <select class="form-control" id="role" name="role">
                    <option value="0" >Membre Cena</option>
                    <option value="1" >Chef Arrondissement</option>
                    <option value="2" >Chef Centre </option>
                    <option value="3" >Chef Bureau</option>
                  </select> 
                </div>


                <div id="block_commune" class="form-group">
                  <label><em class="fa fa-map-marker">&nbsp;</em>Commune</label>
                  <select class="form-control" id="commune" name="commune">
                    @for($i=0;$i<$nbCo;$i++)
                      <option>{{$communes[$i]}}</option>
                    @endfor
                  </select> 
                </div>
                <div class="form-group" id="block_arrondissement">
                  <label><em class="fa fa-map-marker">&nbsp;</em>Arrondissement</label>
                  <select class="form-control" id="arrondissement" name="arrondissement">
                    @for($i=0;$i<$nbA;$i++)
                      <option>{{$arrondissements[$i]}}</option>
                    @endfor
                  </select> 
                </div>
                <div class="form-group" id="block_centre_vote">
                  <label><em class="fa fa-map-marker">&nbsp;</em>Centre de Vote</label>
                  <select class="form-control" id="centre" name="centre">
                    @for($i=0;$i<$nbCe;$i++)
                      <option>{{$centres[$i]}}</option>
                    @endfor
                  </select> 
                </div>
                <div class="form-group" id="block_bureau_vote">
                  <label><em class="fa fa-map-marker">&nbsp;</em>Bureau de Vote</label>
                  <select class="form-control" id="bureau" name="bureau">
                    @for($i=0;$i<$nbB;$i++)
                      <option>{{$bureaus[$i]}}</option>
                    @endfor 
                  </select> 
                </div>
                <hr>
                <div style="text-align: right;">
                  <button type="submit" class="btn btn-primary">Inscrire</button>
                </div>
            </form>
          </div>
        </div>
      </div>
  </div>

@stop
