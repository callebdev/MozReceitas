<?php
     $user = "root";
     $senha = "9673";
     $db = "receitas";
     $server = "localhost";

      $con = mysqli_connect($server,$user,$senha,$db) or die("Problemas na conexao da base de dados, contacte a equipe de apoio ao cliente!");


?>