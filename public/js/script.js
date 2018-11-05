(function () {

    //alert('Voici un alert');
    $('select#role').change(function(){ //si La liste des roles est changée
      var role =$('select#role').val();   //on prend la valeur de l´option de select
     // si la valeur de l´option est > 0 : pas choisissez votre role
        if(role==3){
      $('select#bureau').parent().hide();
        }
        else if(role==2){
      $('select#bureau').parent().show();
        }
      
    })

    /*$('select#deptSelect').change(function(){
      //alert($('select#deptSelect').val());
      if(!$('select#deptSelect').val()==0){
      $.ajax({
        url: "traitement.php",
        async: false,
        type: "POST",
        data: { idDept: $('select#deptSelect').val() },
        dataType: "json",
        success: function(data){
          //alert(JSON.stringify(data));
          for (var i = 0; (i < data.length); i++)
                {
                  var listeCommunes=listeCommunes+"\
                  <option>"+data[i]['commune']+"</option>" ;
        };
        //alert(listeCommunes);
        $('select#communeSelect').replaceWith('<select class="form-control" id="communeSelect">'+listeCommunes+'</select>');
      }
      })
    }

    })*/


    });
