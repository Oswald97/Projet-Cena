@extends('layouts.centre')


@section('content')

    <div class="row">
      <div  style="margin-left: 30px;"class="col-md-8">
        <div class="panel panel-sm panel-info">
          <div class="panel-heading">Envoyer un rapport</div>
          <div class="panel-body">
            <div class="col-md-8">
              <fieldset>
              <form method="post" action="{{route('rapport')}}" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                  <label>Fichiers</label>

                  <input type="file" class="form-control {{$errors->has('image') ? 'is-invalid' : '' }}" name="fichier"id="fichier"value="{{ old('image') }}" required>

                  <p class="help-block">Sélectionner un fichier</p>
                  <!--div style="text-align: right;"-->
                  <button type="submit" class="btn btn-success">Envoyer</button>
                  <!--/div-->
                </div>
              </form>
              </fieldset>
            </div>
          </div>
        </div><!-- /.panel-->
      </div><!-- /.col-->
    </div><!-- /.row -->
@stop
