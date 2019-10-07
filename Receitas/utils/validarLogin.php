<?php
    include_once('conexao.php');
?>

<?php
        if(isset($_POST)){
             $email = $_POST['email_login'];
             $password = $_POST['password_login'];
             $buscar = mysqli_query($con,"select  nome, apelido,id from utilizador where email ='$email' and senha='$password'");
             $dado = mysqli_fetch_array($buscar);
             $existe = mysqli_num_rows($buscar);
                if($existe>0){
                    session_start();
                    $_SESSION['id'] = $dado['id'];
                    $_SESSION['nome'] = $dado['nome'];
                    $_SESSION['apelido'] = $dado['apelido'];
                    $a =$_SESSION['id'];
                      ?>
                      <script>
                       window.location.href ="index.php";
                      </script>
                      <?php
                }else{
                     echo "Senha ou login erradas, porfavor verifique os seus dados";
                }
             
        }else{
             echo "Problemas inesperados, procure por pela equipe de assistencia";
            exit;
        }
?>