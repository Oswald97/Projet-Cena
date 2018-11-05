@extends('layouts.master')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Profil</h1>
      </div>
    </div><!--/.row-->    
        
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-warning">
          <div class="panel-heading">Profil</div>
          <div class="panel-body">
             <br>
                <img style="box-shadow: 5px 10px 18px #888888; background-color: rgb(105;105;105);border-bottom: solid silver 0.5px; padding-bottom: 5px; min-width: 300px;max-width: 500px; min-height: 100px;max-height: 200px; " title="Username" src="/profil.jpeg" alt="...">
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="panel panel-info">
          <div class="panel-heading">Info</div>
          <div class="panel-body">
                              <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" disabled="disabled" placeholder="{{$role}}"  >
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" disabled="disabled" placeholder="{{$user->nom}} " >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Prenoms</label>
                        <input type="text" class="form-control" placeholder="{{$user->prenom}}" disabled="disabled">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="{{$user->email}}" disabled="disabled" >
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" placeholder="{{$user->telephone}}" disabled="disabled">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Commune</label>
                        <input type="text" class="form-control" placeholder="{{$commune}}" disabled="disabled">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Arrondissement</label>
                        <input type="text" disabled="disabled" class="form-control" placeholder="{{$arron}}" >
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Centre de vote</label>
                        <input type="text" disabled="disabled" class="form-control" placeholder="{{$centre}}" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Bureau de vote</label>
                        <input type="text" disabled="disabled" class="form-control" placeholder="{{$bureau}}" >
                      </div>
                    </div>
                  </div>
                     <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Age</label>
                        <input type="number" disabled="disabled" class="form-control" placeholder="24" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Sexe</label>
                        <input type="text" disabled="disabled" class="form-control" placeholder="M/F" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Taille</label>
                        <input type="text" disabled="disabled" class="form-control" placeholder="1.6 m" >
                      </div>
                    </div>
                  </div>
                  
                  </div>
        </div>
      </div>
    </div><!-- /.row -->
  </div>
@stop
