<?php

//----------------------------------------------------------------------------------------------------------------------
//
//Função	: Script responsável por realizar a abertura e validação da sessão.
//Analista	: Beatriz D. Ferreira
//Data		: 30/10/2012
//Cliente	: Maiorino Comunicação
//
//----------------------------------------------------------------------------------------------------------------------


   session_start(); // Inicializa a sessão
   
			$logado 			= $_SESSION['autentica']='1'; //autentica o site.
			$usuario_logado 	= $_SESSION['usuario'] 	= $usuario;
			$senha_usuario		= $_SESSION['senha'] 	= $senha;
			$nome_logado		= $_SESSION['nome']		= $nome;
      
			if ($logado <> 1) {
			echo "<script>window.location='aviso.php?id=1'</script>";
			}			
?>
