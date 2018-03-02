
  <?php
include "../config.php";
include "../valida_user.inc";


$query = "SELECT * FROM usuarios WHERE usuario = '".$usuario."'";
$query = mysql_query($query);

$linha = mysql_fetch_array($query)

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
	padding: 15px 0px 0px 35px;
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
	width: 180px;
	background-color: #5C2E91;
	color: #FFF;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	padding: 5px 5px 5px 5px;
	font-weight:bold;
}
.input{
	width: 400px;
	background-color: #E8E8E8;
	color: #000;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	padding: 5px 5px 5px 5px;
}
input{
	background-color: #E8E8E8;
	color: #000000;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	border-top: 0px;
	border-left: 0px;
	border-right: 0px;
	border-bottom: 1px solid #F78F1E;
}
</style>
</head>

<body>
<br />
<font class="h3">Alterar Dados da Conta</font>
<br />
<br />
<br />
<br />
<br />
		<table>
<form action="atualiza.php" method="post" enctype="multipart/form-data" name="enviar" id="enviar" >
			<tr>
				<td class="label">Nome:</td>
				<td class="input"><?php echo $linha['nome']; ?></td>
			</tr>
			<tr>
				<td class="label">E-mail:</td>
				<td class="input"><input type="text" id="email"  name="email" value="<?php echo $linha['email']; ?>" /></td>
			</tr>
			<tr>
				<td class="label">Login:</td>
				<td class="input"><?php echo $linha['usuario']; ?></td>
			</tr>
			<tr>
				<td class="label">Senha:</td>
				<td class="input" ><input type="password" id="senha" name="senha" size="10" value="<?php echo $linha['senha']?>" /></td>
			</tr>
		</table>
<br />
		<center><button name="enviar" type="submit" id="enviar" >Gravar</button></center>

</form>
</body>
</html>

