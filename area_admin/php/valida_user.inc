<?php

//----------------------------------------------------------------------------------------------------------------------
//
//Fun��o	: Script respons�vel por realizar a abertura e valida��o da sess�o.
//Analista	: Beatriz D. Ferreira
//Data		: 30/10/2012
//Cliente	: Maiorino Comunica��o
//
//----------------------------------------------------------------------------------------------------------------------


   session_start(); // Inicializa a sess�o
   
			$logado 			= $_SESSION['autentica']='1'; //autentica o site.
			$usuario_logado 	= $_SESSION['usuario'] 	= $usuario;
			$senha_usuario		= $_SESSION['senha'] 	= $senha;
			$nome_logado		= $_SESSION['nome']		= $nome;
      
			if ($logado <> 1) {
			echo "<script>window.location='aviso.php?id=1'</script>";
			}			
?>
