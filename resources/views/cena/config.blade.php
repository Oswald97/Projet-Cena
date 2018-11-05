@extends('layouts.master')
  <style type="text/css">
  tr{
        border-top: solid silver 2px;
        text-align: center;
      }
  td{
        border-radius: 5px;
        border: solid silver 2px;
        text-align: center;
        padding: 10px;
      }
</style>
@section('css')

@stop

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Informations sur l'élection </h1>
      </div>
    </div><!--/.row-->    

    <form  method='POST' action="{{route('config')}}" onsubmit="return ValidationSaisie()">
      @csrf
      <div class="row">
        <div style="padding-left: 50px;" class="col-md-10">
          <div class="panel panel-info">
            <div class="panel-heading">Renseignez les listes électorales</div>
            <div class="panel-body">
            
                <input type="hidden" id ='nb_lignes_transfert' name='nb_lignes_transfert' value='2'>
                <input type="hidden" id="id_transfert_a_supprimer" name="id_transfert_a_supprimer" value="">
                <label>Renseigner les parties en lice : </label>
                <table id="tabtransfert" style="text-align: center; margin:5px; text-align: left;">
                   <tbody>
                      <tr class="gris0">    
                        <td style="width: 60px;"><label>Rajouter/supprimer <br/>une ligne</label></td>
                        <td style="width: 400px;"><label>Nom du parti politique </label></td>
                        <td style="width: 30px;"><label></label></td>
                        <td style="width: 400px;"><label>Sigle</label></td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr class="gris0">
                        <td  style="text-align: center;"> 
                          <button type="button" onclick="ajoutLigneAuTableauTransfert();" class="btn btn-info btn-xs">
                            <i class="fa fa-plus"></i>
                          </button>
                        </td>
                        <td >
                          <input class="form-control champ_date_input_tableau input" type='text'  id='date_t1' name='data_transaction[1][0]'>
                        </td>
                        <td ></td>
                        <td ><input class="form-control champ_formulaire_gauche input" type='text' id='heure_t1' name='data_transaction[1][]'></td>
                      </tr> 
                  </tbody>
                </table>
          </div>
        </div>
      </div>
    </div><!-- /.row -->    
        
    <div class="row">
      <div style="padding-left: 50px;" class="col-md-10">
        <div class="panel panel-info">
          <div class="panel-heading">Renseigner le nombre de siège par commune</div>
          <div class="panel-body">
              <table style="text-align: center; margin:5px; text-align: left;">
                 <tbody>
                  <tr class="gris0">    
                    <td style="width: 400px;"><label>Commune</label></td>
                    <td style="width: 400px;"><label>Nombre de Siège</label></td>
                  </tr>
                </tbody>  
                <tbody>
                  @for($i=0; $i<$nb;$i++)
                    <tr class="gris0">
                    <td>
                      <p>
                        {{$communes[$i]->nom_commune}}
                      </p>
                    </td>
                    <td >
                      <input class="form-control" type='text' name="{{$i}}" placeholder="Entrer un nombre" required >
                    </td>
                  </tr> 
                  @endfor
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6" >
        <div class="form-group">
          <div class="panel panel-info">
            <div class="panel-heading">Renseigner la date de démarrage des élections</div>
              <div class="panel-body">
          
                <div class="input-group">
                  <input type="text" name="date" id="doced" class="form-control">
                  <span class="input-group-addon" required>
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-primary"  value="Valider" />
        </div>
      </div>
    </div>
  </form>
  </div><!--/.main-->

@stop

@section('js')
  <script type="text/javascript" src="./jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="./jquery-ui-1.8.21.custom.min.js"></script>
  <!--script src="jquery-1.12.4.js"></script>
  <script src="jquery-ui.js"></script-->
  <script type="text/javascript">
<!--
   $('#doced').datepicker({
    dateFormat: 'dd-mm-yy',
    changeMonth: true,
    changeYear: true,
    yearRange: "c-70:c+70",
    minDate: +1,
  });
var nbLignesTransfert= 1;
var i = 1;
 
 
function deleteRows(rowObjArray)
{
 
    for (var i=0; i<rowObjArray.length; i++) {
      var rIndex = rowObjArray[i].sectionRowIndex;
      rowObjArray[i].parentNode.deleteRow(rIndex);
 
    }
}
 
function ajoutLigneAuTableauTransfert()
{
 
    var tbl = document.getElementById('tabtransfert');
 
    // ajout d'une ligne
    var row = tbl.tBodies[1].insertRow(-1);
 
  // Lien cliquable de  Suppression de ligne
  var br=document.createElement('br')
  var newCell0 = row.insertCell(0);
  var LienSuppression=document.createElement('button');
  LienSuppression.setAttribute('type','button');
  LienSuppression.setAttribute('class','btn btn-danger btn-xs');
  newCell0.appendChild(LienSuppression);
    var icone=document.createElement('i');
  icone.setAttribute('class','fa fa-minus');
    LienSuppression.appendChild(icone);
  LienSuppression.onclick = function () {
    deleteCurrentRow_tab_transfert(this);
  }
 
 
  // Cellule 1 : champ caché id_transfert + champ numéro de vol
  var newCell1 = row.insertCell(1);
 
  //Champ caché id_transfert : vide lors de la création, avec une valeur en mode modification
  var champ_id_transfert = document.createElement('input');
  champ_id_transfert.setAttribute('type','hidden');
  champ_id_transfert.setAttribute('name','id_transfert');
  champ_id_transfert.setAttribute('value','');
  newCell1.appendChild(champ_id_transfert);
 
  // Champ Date d arrivee
 
  var champ_date_arrivee = document.createElement('input');
  champ_date_arrivee.setAttribute('type','text');
  champ_date_arrivee.setAttribute('name','data_transaction[1]['+ (i) +']');
  champ_date_arrivee.setAttribute('value','');
  champ_date_arrivee.setAttribute('id','date_t');
  champ_date_arrivee.className='form-control champ_date_input_tableau input';
  newCell1.appendChild(champ_date_arrivee);

 
  var newCell2 = row.insertCell(2);
 
  // Champ Heure d arrivee
  var newCell3 = row.insertCell(3);
  var champ_heure_arrivee = document.createElement('input');
  champ_heure_arrivee.setAttribute('type','text');
  champ_heure_arrivee.setAttribute('name','data_transaction[1]['+ (i) +']');
  champ_heure_arrivee.setAttribute('value','');
  champ_heure_arrivee.setAttribute('id','heure_t');
  champ_heure_arrivee.className='form-control champ_formulaire_gauche input';
  newCell3.appendChild(champ_heure_arrivee);
  
  i++;

  nbLignesTransfert++;
  majNumLignesTabTransfert('ajout');
  document.getElementById('nb_lignes_transfert').value= nbLignesTransfert;
 
}
 
function majNumLignesTabTransfert(modalite){
  var modalite; 
  for(var i = 0 ; i < nbLignesTransfert ; i++){
    var tbl = document.getElementById('tabtransfert');
    var nom_aeroport;
 
    tbl.tBodies[1].rows[i].className = 'gris0'  ;
 
 
    //Mise a jour de la cellule 1 (champ caché id_transfert : vide lors de la création, avec une valeur en mode modification)
    tbl.tBodies[1].rows[i].cells[1].getElementsByTagName('INPUT')[0].setAttribute('name','id_transfert'+(i+1));
 
 
    //Mise a jour du champ date_arrivee
    tbl.tBodies[1].rows[i].cells[1].getElementsByTagName('INPUT')[1].setAttribute('name','data_transaction['+(i+1)+'][0]');
    tbl.tBodies[1].rows[i].cells[1].getElementsByTagName('INPUT')[1].setAttribute('id', 'date_t'+(i+1));
 
    //Mise a jour du champ heure_arrivee
    tbl.tBodies[1].rows[i].cells[2].getElementsByTagName('INPUT')[0].setAttribute('name','data_transaction['+(i+1)+'][1]');
    tbl.tBodies[1].rows[i].cells[2].getElementsByTagName('INPUT')[0].setAttribute('id', 'heure_t'+(i+1));
 
  }
}
function deleteCurrentRow_tab_transfert(obj,id_transfert_sup)
{
    var delRow = obj.parentNode.parentNode;
    var tbl = delRow.parentNode.parentNode;
    var rIndex = delRow.sectionRowIndex;
    var rowArray = new Array(delRow);
    var id_transfert_sup = id_transfert_sup;
    //alert(id_prestation_sup);
    if (!isNaN(id_transfert_sup)){
    document.forms["form_transaction"].elements["id_transfert_a_supprimer"].value+=id_transfert_sup+'|';
    }  
    deleteRows(rowArray);
 
    nbLignesTransfert--;  
    majNumLignesTabTransfert();
    document.getElementById('nb_lignes_transfert').value= nbLignesTransfert;    
}
//-->
</script>
@stop
