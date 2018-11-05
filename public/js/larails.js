jQuery(function () {

    var larails = {

        // Define the name of the hidden input field for method submission
        methodInputName: '_method',
        // Define the name of the hidden input field for token submission
        tokenInputName: '_token',
        // Define the name of the meta tag from where we can get the csrf-token
        metaNameToken: 'csrf-token',

        initialize: function()
        {
            $('a[data-method]').on('click', this.handleMethod);
        },

        handleMethod: function(e)
        {
            e.preventDefault();

            var link = $(this),
                httpMethod = link.data('method').toUpperCase(),
                confirmMessage = link.data('confirm'),
                form;

            // Exit out if there is no data-methods of PUT, PATCH or DELETE.
            if ($.inArray(httpMethod, ['PUT', 'PATCH', 'DELETE']) === -1)
            {
                return;
            }

            // Allow user to optionally provide data-confirm="Are you sure?"
            if (confirmMessage)
            {
                if( confirm(confirmMessage) ) {
                    form = larails.createForm(link);
                    form.submit();
                }
            } else {
               form = larails.createForm(link);
               form.submit();
            }
        },

        createForm: function(link)
        {
            var form = $('<form>',
                {
                    'method': 'POST',
                    'action': link.prop('href')
                });

            var token = $('<input>',
                {
                    'type': 'hidden',
                    'name': larails.tokenInputName,
                    'value': $('meta[name=' + larails.metaNameToken + ']').prop('content')
                });

            var method = $('<input>',
                {
                    'type': 'hidden',
                    'name': larails.methodInputName,
                    'value': link.data('method')
                });

            return form.append(token, method).appendTo('body');
        }
    };

    larails.initialize();

/********************************** *************************************************
script intervenant dans la sélection des roles lors de la pré-inscription des agents
*************************************************************************************/


    $('select#role').change(function(){ //si La liste des roles est changée
      var role =$('select#role').val();   //on prend la valeur de l´option de select
     // si la valeur de l´option est > 0 : pas choisissez votre role
        if(role==1){
            $('select#commune').parent().show();
            $('select#arrondissement').parent().show();
            $('select#centre').parent().hide();
            $('select#bureau').parent().hide();
        }
        else if(role==2){
            $('select#commune').parent().show();
            $('select#arrondissement').parent().show();
            $('select#centre').parent().show();
            $('select#bureau').parent().hide();
        }
        else if(role==3){
            $('select#bureau').parent().show();
        }
        else {
            $('select#commune').parent().hide();
            $('select#arrondissement').parent().hide();
            $('select#centre').parent().hide();
            $('select#bureau').parent().hide();
        }
    })


    /*$('button#btValide').click(function(){ //si La liste des roles est changée
     // si la valeur de l´option est > 0 : pas choisissez votre role
        
            $('button#btValide').text('Election en cours');
    })*/

});


