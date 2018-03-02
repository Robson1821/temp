<?php

//----------------------------------------------------------------------------------------------------------------------
//
//Função	: Página inicial central da Área administrativa.
//Analista	: Beatriz D. Ferreira
//Data		: 05/01/2013
//Cliente	: Maiorino Comunicação 
//
//----------------------------------------------------------------------------------------------------------------------

include "valida_user.inc";
include "config.php";

//-----------------------------------
// Verifica último acesso do usuário
//-----------------------------------

$sql="SELECT DISTINCT * FROM log WHERE usuario = '".$usuario."' order by `cod` desc limit 1,1";
$query = mysql_query($sql) or die( mysql_error());

$dados = mysql_fetch_array($query);

$data = $dados['data'];
$hora = $dados['hora'];


//------------------------------------------
// Verifica vagas cadastradas ativas
//------------------------------------------

$query = 'SELECT COUNT(*) FROM vagas WHERE D_E_L_E_T_E_ = " " and status < "2"';
$query = mysql_query($query);
$query = mysql_fetch_array($query);
$vagas = $query[0];

//------------------------------------------
// Verifica vagas que o usuario se cadastrou
//------------------------------------------

$query1 = "SELECT COUNT(*) FROM vaga_candidato WHERE cod_candidato = '".$usuario."' and status < '2'";
$query1 = mysql_query($query1);
$query1 = mysql_fetch_array($query1);
$participando = $query1[0];

$query = "SELECT COUNT(*) FROM vaga_candidato WHERE cod_candidato = '".$usuario."' and status < '2'";
$query = mysql_query($query);
$query = mysql_fetch_array($query);
$total = $query[0];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>

<style type="text/css">
body {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-weight: normal;
	padding: 15px 0px 0px 35px;
	background:#ccc;
}
table {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	padding: 15px 15px 15px 35px;
	color: #000;
	background-color: #E8E8E8;
}
.h1 {
	font-family: Verdana, Geneva, sans-serif;
	clear: both;
	color:#F78F1E;
	font-size: 12px;
	font-weight:bold;
}
.h2 {
	font-family: Verdana, Geneva, sans-serif;
	clear: both;
	color:#F78F1E;
	font-size: 18px;
	font-weight:bold;
}
.h3 {
	font-family: Verdana, Geneva, sans-serif;
	clear: both;
	color:#F78F1E;
	font-size: 24px;
	font-weight:bold;
}
</style>

</head>
<body>
<br>
<font class="h3"><b><?php echo "$nome" ?>, </font>
<br />
<font class="h2">você está em área restrita e segura!</b></font>
<br />
<br />
<br />
Todas as informações inseridas aqui, serão acessadas somente por nós.
<br />
<br />
<br />
<br />
<table width="500px" height="30px" cellspacing="0" bgcolor="#639" cellpadding="0">
<tr>
<td>

Seu acesso anterior foi em <b><?php echo date('d/m/Y', strtotime($data)); ?></b> às <b><?php echo $hora; ?></b> horas.
</td>
</td>
</table>
<br />
<br />
<table width="500px" height="30px" cellspacing="0" bgcolor="#639" cellpadding="0">
<tr>
<td>
Existem <b><?php echo $vagas ?> </b>vagas(s) ativa(s) no site.
</td>
</td>
</table>
<br />
<br />
<table width="500px" height="30px" cellspacing="0" bgcolor="#639" cellpadding="0">
<tr>
<td>
Você se candidatou a <b><?php echo $participando ?></b> vagas(s) 
<?php if($total==0){
}else{ ?>
<font class="h1"> | </font> <a href="vagas/participando.php" target="frame" class="h1"> Visualizar</a>
<?php } ?>
</td>
</td>
</table>
</body>
</html>