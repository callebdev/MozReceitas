$(document).ready(function(){
         $('#contact_form').bootstrapValidator({   
             feedbackIcons: {
             required: 'fa fa-asteris',
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
             
    fields:{
password_antiga:{
            validators:{
             notEmpty:{
                     message:'campo obrigatorio'
                 },
                 stringLength:{
                     min:8,
                     max:15
                 }
        },
        
        password_nova:{
            validators:{
             notEmpty:{
                     message:'campo obrigatorio'
                 },
                 stringLength:{
                     min:8,
                     max:15
                 },
                
                   identical:{
                        field: 'password_confirm',
                        message: 'os campos senha e confirm senha devem ser identicos'
                }
            }
        },

            
         password_confirm:{
             validators:{
                stringLength:{
                 min:8,
                 max:15,
           },
             notEmpty:{
              message:'Campo obrigatorio'
         },
           identical:{
                        field: 'password_nova',
                        message: 'os campos senha e confirm senha devem ser identicos'
                    }
                }
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
           $.post("../utils/trocarSenha.php", $form.serialize(), function(result) {
                   $("#aviso").html(result);
            });
    })
 })
