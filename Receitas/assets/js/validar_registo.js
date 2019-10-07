$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
             required: 'fa fa-asteris',
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nome: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Por favor digite o seu primeiro nome'
                        }
                }
            },
            
            email:{
                validators:{
                    emailAddress:{
                        message:'porfavor digite o email correcto'
                    },
                    
                    notEmpty:{
                        message: 'por favor Digite o seu endereco de email'
                    }
                }
            },
            
            apelido:{
                validators:{
                    notEmpty:{
                         message:'por favor, preencha o campo'
                    },
                    
                    stringLength:{
                        min:2,
                    }
                }
            }, 
            
            password:{
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
                 max:15
             },
             notEmpty:{
              message:'Campo obrigatorio'
         },
           identical:{
                        field: 'password',
                        message: 'os campos senha e confirm senha devem ser identicos'
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
           $.post("../utils/registar.php", $form.serialize(), function(result) {
                   $("#aviso").html(result);
            });
    });
})
  