<?php

//----------------------------------------------------------------------------------------------------------------------
//
//Fun��o	: Conex�o ao Banco de Dados
//Analista	: Beatriz D. Ferreira
//Data		: 02/01/2013
//Cliente	: Maiorino Comunica��o // Trabalhe Conosco
//
//----------------------------------------------------------------------------------------------------------------------

$Host	= '186.202.152.54';  //Caminho para o host

$Base	= 'maiorino' ;  	//Banco de dados
$User	= 'maiorino' ;   	//Usu�rio
$Senha	= 'mrnbd111' ;      //Senha

$con = mysql_connect($Host, $User, $Senha);
mysql_select_db($Base);

?>
