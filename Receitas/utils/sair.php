<?php

session_start();
   unset($_SESSION['id']);
   unset($_SESSION['nome']);
   unset($_SESSION['tipo_func']);
      session_destroy();
	    header('location:../login.html');
		exit;


?>