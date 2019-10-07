$(document).ready(function(){
    $('#login').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
             required: 'fa fa-asteris',
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        
         fields:{
             email_login:{
                    
                  validators:{
                      notEmpty:{
                          message:"Porfavor, preencha o campo para logar"
                      },
                      emailAddress:{
                          message: "porfavor, digite um email valido"
                      }
                  }
         },
             
             password_login:{
                  validators:{
                      notEmpty:{
                          message: "por favor preencher o campos"
                      },
                      stringLength:{
                          min:8,
                          max:15
                      }
                  }
             }
         }
    })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#login').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(this);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
           $.post("utils/validarLogin.php", $form.serialize(), function(result) {
                   $("#aviso").html(result);
            });
    });
})