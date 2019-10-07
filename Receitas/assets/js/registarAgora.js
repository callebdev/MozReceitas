
   $(document).ready(function(){
       $("#contact_form").submit(function(event){
             event.preventDefault();
             var request;
           
           var $form = $(this);

           var serializedData = $form.serialize();

            request = $.ajax({
            url: "../utils/registar.php",
            type: "post",
            data: serializedData,
            target: '#aviso'
         });

             // Callback handler that will be called on success
               request.done(function (response, textStatus, jqXHR){
                // Log a message to the console
               $('#aviso').html(response);
			    $("#aviso").fadeIn(1000,function(){
					 $("#aviso").stop();
				});
				  
        });
       })
   })