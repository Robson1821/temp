<?php
$id=$_REQUEST['id'];

	switch($id)
	{
		case 1:
			$mens = "N�o foi localizado a autentica��o de acesso.";
			$nomedaopcao = "efetuar login.";
			$caminho = "index.php";
			break;
		case 2:
			$mens = "Logout efetuado com sucesso!";
			// INICIA O LOG---------------------------------------	
			require_once("datahora.php");
			require_once("banco.php");
			$op="saiu do sistema";
			$sql5 = "INSERT INTO log (cod, usuario, nome, data, hora, op, ip) VALUES ('', '$_SESSION[usuario_logado]', '$_SESSION[usuario]', '$_SESSION[data]', '$msghora', '$op', '$_SERVER[REMOTE_ADDR]')";
			mysql_query($sql5);
			// FIM DO LOG-----------------------------------------
			session_start();
			session_unset();
			session_destroy();
			$nomedaopcao = "efetuar login novamente.";
			$caminho = "index.php";
			break;
		case 3:
			$mens = "Usu�rio e/ou senha n�o localizados na base de dados.";
			$nomedaopcao = "Voltar para p�gina de login.";
			$caminho = "index.php";
			break;
		case 4:
			$mens = "Usu�rio n�o est� ativo no sistema. Favor, contatar o administrador!";
			$nomedaopcao = "Voltar para p�gina de login";
			$caminho = "index.php";
			break;
	}
?>
<html>
<head>
<title>Maiorino Comunica��o</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
body {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-weight: normal;
	padding: 15px 0px 0px 35px;
}
table {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #000;
	margin-top: 40px;
}
.tr {
	background-color:#5C2E91;
	color: #FFF;
	font-size: 24px;
	padding: 10px;
	font-weight:bold;
	height: 75px;
}
.td{
	background-color:#F78F1E;
	color: #FFF;
	font-size: 14px;
	padding: 10px;
	width: 575px;
	font-weight:bold;
	height: 75px;
}
</style>
</head>

<body>

<center>
<img src="imagens/Logo-Maiorino-Comunicacao.png" width="400" height="90"/>
</center>

<table width="740" border="0" align="center">
<tr>
<td class="tr"> Oops!!
</tr>
<tr>
<td class="td"><?php echo $mens; ?></td>
</tr>
</table>
</body>
</html>
