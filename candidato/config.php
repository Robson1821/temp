<?php

//----------------------------------------------------------------------------------------------------------------------
//
//Fun��o	: Conex�o do banco de dados da Area administrativa
//Analista	: Beatriz D. Ferreira
//Data		: 30/10/2012
//Cliente	: Maiorino Comunica��o // Metalis
//
//----------------------------------------------------------------------------------------------------------------------

$Host	= '186.202.152.54';  //Caminho para o host

$Base	= 'maiorino' ;  //Banco de dados
$User	= 'maiorino' ;   	//Usu�rio
$Senha	= 'mrnbd111' ;      //Senha


$con = mysql_connect($Host, $User, $Senha);
mysql_select_db($Base);

?>
