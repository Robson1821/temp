<?php

//----------------------------------------------------------------------------------------------------------------------
//
//Função	: Conexão ao Banco de Dados
//Analista	: Beatriz D. Ferreira
//Data		: 02/01/2013
//Cliente	: Maiorino Comunicação // Trabalhe Conosco
//
//----------------------------------------------------------------------------------------------------------------------

$Host	= '186.202.152.54';  //Caminho para o host

$Base	= 'maiorino' ;  	//Banco de dados
$User	= 'maiorino' ;   	//Usuário
$Senha	= 'mrnbd111' ;      //Senha

$con = mysql_connect($Host, $User, $Senha);
mysql_select_db($Base);

?>
