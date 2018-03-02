<?php

   			session_start(); // Inicializa a sessão

			if (IsSet($_SESSION['auser']))
			$usuario = $_SESSION['auser'];
      
			if (IsSet($_SESSION['senha']))
			$senha = $_SESSION['senha'];
	  
			if (IsSet($_SESSION['nome']))
			$nome = $_SESSION['nome'];
      
			if (empty($usuario) OR empty($senha)) {
				
			echo "<script>alert('erro ao entrar com user e senha');</script>";
			}


?>
