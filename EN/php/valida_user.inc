<?php

   			session_start(); // Inicializa a sessão

			if (IsSet($_SESSION['usuario']))
			$usuario = $_SESSION['usuario'];
      
			if (IsSet($_SESSION['senha']))
			$senha = $_SESSION['senha'];
	  
			if (IsSet($_SESSION['nome']))
			$nome = $_SESSION['nome'];
      
			if (empty($usuario) OR empty($senha)) {
			echo "<script>window.location='../php/aviso.php?id=1'</script>";
			}

?>
