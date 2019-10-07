$(document).ready(function(){
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
             required: 'fa fa-asteris',
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        
         fields:{
             titulo:{
                    
                  validators:{
                      notEmpty:{
                          message:"Porfavor, preencha o campo para logar"
                      }
                  }
             },
             
             descricao:{
                 notEmpty:{
                     message:'campo obrigatorio'
                 },
                 
                 stringLength:{
                     min:50,
                     max:200
                 }
             }
         }
    })
    
    .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(this);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
           $.post("../utils/registarReceita.php", $form.serialize(), function(result) {
                   $("#aviso").html(result);
            });
    })
}) 