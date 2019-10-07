<!DOCTYPE html>
<html>
<head>
  <title>Todas as Receitas</title>
  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../assets/bootstrap/bootstrapvalidator-0.5.2/bootstrapvalidator-0.5.2/dist/css/bootstrapValidator.css"/>
  <meta charset="utf-8">

</head>
<body>

  <?php
   include_once("../utils/conexao.php");
?>

<?php
     session_start();

     $buscar_receita = mysqli_query($con, "select *from receita");


?>



</br>

<div class="container">
       <center><table>
             <tr>
                 <h2>Aqui estao todas as receitas!</h2>    
             </tr>
           <tr>
               <td align="center"><h2>Titulo da Receita&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2><br><br></td>
               <td align="center"><h2>Descricao</h2><br><br></td>
               <td align="center"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Autor/a</h2><br><br></td>
           </tr>
            
            <?php
                 while($receita = $buscar_receita->fetch_array()){
                     ?>
           <tr>
               <td><?php echo $receita['titulo']; ?><br><br></td>
               <td><?php echo $receita['descricao']; ?><br><br></td>
               <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                          $id_user = $receita['id_utilizador'];
                           $buscar_user = mysqli_query($con, "select nome, apelido from utilizador where id='$id_user' ");
                          
                           $utilizador = mysqli_fetch_array($buscar_user);
                          echo $utilizador['nome']." ".$utilizador['apelido'];
                   ?><br><br></td>
           </tr>

           <?php }?>
           </table></center>

           <br><br>

    
    <a href="../index.php" class="btn btn-info">Voltar a pagina Principal</a>
</div>


</body>
</html>


