<?php
 include_once("conexao.php");
?>

<?php

 if(isset($_POST)){
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    
      session_start();
      $id_user = $_SESSION['id'];
      
     if(mysqli_query($con,"insert into receita(titulo, descricao,id_utilizador) values('$titulo','$descricao','$id_user')")){
         echo "Registada com sucesso";
          exit;
     }else{
             echo "Ocorreu um erro";
             exit;
         }
     }
?>