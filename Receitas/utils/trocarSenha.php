<?php
   include_once("conexao.php")
?>
<?php

 if(isset($_POST)){
    $senha_antiga = $_POST['password'];
    $senha_nova = $_POST['password_nova'];
    $senha_confirm = $_POST['password_confirm'];
     
        if($senha_nova != $senha_confirm){
            echo "A senha nova nao foi confirmada";
            exit;
        }else{
             session_start();
              $id_utilizador = $_SESSION['id'];
            $buscar = mysqli_query($con,"select senha from utilizador where id='$id_utilizador'");
             $senhaBase = mysqli_fetch_array($buscar);
                   if($senhaBase['senha']==$senha_antiga){
                       
                       $actualizar = "update utilizador set senha='$senha_nova' where id='$id_utilizador'";
                         if(mysqli_query($con,$actualizar)){
                             echo "Actualizado com sucesso";
                             exit;
                         }else{
                             echo "Ocorreu uma falha";
                             exit;
                         }
                   }else{
                       echo "A senha antiga esta incorrecta";
                   }
            
        }
 }
?>