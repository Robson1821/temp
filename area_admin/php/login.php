<?php


//----------------------------------------------------------------------------------------------------------------------
//
//Funчуo	: Script que realiza verificaчуo do usuсrio no banco de dados para a realizaчуo do login e grava log de acesso.
//Analista	: Beatriz D. Ferreira
//Data		: 30/10/2012
//Cliente	: Maiorino Comunicaчуo
//
//----------------------------------------------------------------------------------------------------------------------
    session_start();
	include "config.php";

    
    if (!mysql_connect($Host, $User, $Senha)) {
        echo mysql_error();
        exit();
    }
    mysql_select_db($Base);

    $user = $_POST["auser"];
    //$pwd  = sha1($_POST["senha"]);
	$pwd = $_POST["apass"];
     
    $sQuery = "select cod, nome, usuario, senha
               from   usuarios
               where  usuario = '" . $user . "' and senha = '". $pwd ."' and D_E_L_E_T_E_ = ''";
    $rs = mysql_query($sQuery)
             or die("Query invalida: " . mysql_error());
	
	$dados = mysql_fetch_array($rs); //busca os dados no banco de dados.

	$usuario=$dados['usuario'];
	$senha=$dados['senha'];
	$nome=$dados['nome'];
	$cod=$dados['cod'];	
		
		if (mysql_num_rows($rs)== 0) {
			header('location:aviso.php?id=2');
		
		} Else {
		
			$autentica 	= $_SESSION['autentica']='1'; //autentica o site.
	
			// INICIA O LOG---------------------------------------	
			$op="Entrou no sistema";
			$sql5 = "INSERT INTO log (cod, usuario, nome, data, hora, op, ip) VALUES ('', '$usuario', '$nome', current_date, current_time, '$op', '$_SERVER[REMOTE_ADDR]')";
			mysql_query($sql5);
			// FIM DO LOG-----------------------------------------
			$_SESSION['usuario']= $dados['usuario']; 
			$_SESSION['senha'] = $dados['senha']; 
			$_SESSION['nome']= $dados['nome']; 
			header('location:../acesso/entrada.php');
			}			
		
?>