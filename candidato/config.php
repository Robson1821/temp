<?php

//----------------------------------------------------------------------------------------------------------------------
//
//Função	: Conexão do banco de dados da Area administrativa
//Analista	: Beatriz D. Ferreira
//Data		: 30/10/2012
//Cliente	: Maiorino Comunicação // Metalis
//
//----------------------------------------------------------------------------------------------------------------------

$Host	= '186.202.152.54';  //Caminho para o host

$Base	= 'maiorino' ;  //Banco de dados
$User	= 'maiorino' ;   	//Usuário
$Senha	= 'mrnbd111' ;      //Senha


$con = mysql_connect($Host, $User, $Senha);
mysql_select_db($Base);

?>
