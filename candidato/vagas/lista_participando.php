<?php
include "../config.php";
include "../valida_user.inc";

$codigo		= $_POST['codigo'];
$vaga 		= $_POST['titulo'];
$desc		= $_POST['desc'];
$benef		= $_POST['benef'];
$salario	= $_POST['salario'];
$data		= $_POST['data'];
$voltar		= '<a href="participando.php">Voltar</a>';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
body {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-weight: normal;
	padding-left: 45px;
	padding-top: 15px;
}
table {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #000;
}
.h2 {
	font-family: Verdana, Geneva, sans-serif;
	clear: both;
	color:#F78F1E;
	font-size: 12px;
	font-weight:bold;
	text-decoration: none;
}
.h3 {
	font-family: Verdana, Geneva, sans-serif;
	clear: both;
	color:#F78F1E;
	font-size: 24px;
	font-weight:bold;
}
A:link {color: #F78F1E; text-decoration: none;
}
A:visited {color: #F78F1E; text-decoration: none;
}
A:active {color: #F78F1E; text-decoration: none;
}
A:hover {color: #F78F1E; font-weight:bold; 
}
.label{
	width: 150px;
	background-color: #5C2E91;
	color: #FFF;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	padding: 5px 5px 5px 5px;
	font-weight:bold;
}
.input{
	width: 415px;
	background-color: #E8E8E8;
	color: #000;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	padding: 5px 5px 5px 5px;
}
</style>
</head>

<body>
<br />
<font class="h3" >+ Infos</font>
<br />
<br />
<br />
<br />
Você está participando do processo seletivo desta vaga!
<br />
<br />
<table cellspacing="2" cellpadding="0">
	<tr>
		<td class="label">Código:</td>
		<td class="input">MRN002013<?php echo $codigo ?></td>
	</tr>
	<tr>
		<td class="label">Vaga:</td>
		<td class="input"><?php echo $vaga ?></td>
	</tr>
	<tr>
		<td class="label">Descrição:</td>
		<td class="input"><?php echo $desc ?></td>
	</tr>
	<tr>
		<td class="label">Benefícios:</td>
		<td class="input"><?php echo $benef ?></td>
	</tr>
	<tr>
		<td class="label">Salário:</td>
		<td class="input"><?php echo $salario ?></td>
	</tr>
	<tr>
		<td class="label">Data:</td>
		<td class="input"><?php echo date('d/m/Y', strtotime($data)); ?></td>
	</tr>
</table>
<br />
   <font class="h2"><center><?php echo $voltar ?></center></font>
</body>
</html>