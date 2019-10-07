<?php
   include_once("conexao.php");
?>
<?php 
       if(isset($_POST)){
             $nome = $_POST['nome'];
             $apelido = $_POST['apelido'];
             $email = $_POST['email'];
             $password = $_POST['password'];
                
              $buscar_email = mysqli_query($con,"select email from utilizador where email ='$email'");
                  $email_existe = mysqli_num_rows($buscar_email);
                    
                      if($email_existe>0){
                              echo "Registo sem sucesso, o email digitado ja se encontra registado";
                                  exit;
                         }else{
                            $inserir = "insert into utilizador(nome,apelido,email,senha) values('$nome','$apelido','$email','$password')";
                           if(mysqli_query($con,$inserir)){
                               echo "Registo efectuado com muito sucesso";
                               exit;
                           }else{
                               echo "Ocorreu um erro ao registar, porfavor volte a tentar";
                               exit;
                           }
                      }
           
       }else{
            echo "Ocorreu um erro, porfavor procure por Calleb";
       }
  ?>