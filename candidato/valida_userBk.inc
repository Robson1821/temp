<?php

   			session_start(); // Inicializa a sessão

			if (IsSet($_SESSION['usuario']))
			$usuario = $_SESSION['usuario'];
      
			if (IsSet($_SESSION['senha']))
			$senha = $_SESSION['senha'];
	  
			if (IsSet($_SESSION['nome']))
			$nome = $_SESSION['nome'];
      
			if (!empty($usuario) OR !empty($senha)) {
				##header('location:aviso.php?id=2');
			echo "<script>window.location='location:inicial.php'</script>";
			}else{
			echo "<script>alert('erro ao entrar com user e senha');</script>";
			}

?>
