﻿<?php
     include "../config.php";
     include "../valida_user.inc";
	 
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
	padding-top: 15px;
	padding-left:35px;
}
table {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #000;
	padding: 5px
}
.h2 {
	font-family: Verdana, Geneva, sans-serif;
	clear: both;
	color:#F78F1E;
	font-size: 12px;
	font-weight:bold;
}
.h3 {
	font-family: Verdana, Geneva, sans-serif;
	clear: both;
	color:#F78F1E;
	font-size: 24px;
	font-weight:bold;
}
.td{
	color: #fff;
}
.table{
	border-top-width: thin;
	border-right-width: thin;
	border-bottom-width: thin;
	border-left-width: thin;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #666;
	border-right-color: #666;
	border-bottom-color: #666;
	border-left-color: #666;
}
.ops{
	background-color:#5C2E91;
	color: #FFF;
	font-size: 24px;
	padding: 10px;
	width: 575px;
	font-weight:bold;
}
.aviso{
	background-color:#F78F1E;
	color: #FFF;
	font-size: 14px;
	padding: 10px;
	width: 575px;
	font-weight:bold;
}
</style>
</head>
<script language="javascript">
function confirma(){
        if(confirm('Tem certeza que deseja excluir este curriculo?'))
                return true;
        else
                return false;
}
</script>
<body>
<?php 

$query = "SELECT * FROM curriculo WHERE usuario = '".$usuario."' AND D_E_L_E_T_E_ = ''";
	$exec  = mysql_query($query);
	$regs  = mysql_num_rows($exec);
	$row   = mysql_fetch_array ($exec);
	
	if ($regs == 0) {
?>
<br />
<font class="h3">Editar Currículo</font>
<br />
<br />
<br />
<br />
<table>
<tr>
<td class="ops">Oops!</td>
</tr>
<tr>
<td class="aviso">
<br />
<br />
Você não tem nenhum curriculo cadastrado!<br />
Cadastre agora mesmo na opção 'Currículo' do menu lateral.
<br />
<br />
<br />
<br />
</td>
</tr>
</table>
<br />

<?php } else { ?>
	<br>
    <font class="h3">Editar Currículo</font>
	<br />
	<br />
	<br />
	<br />
	<br />
<table cellspacing="0" bgcolor="#5C2E91" cellpadding="0">
<tr>
<td class="td" width="200px"  ><b>Nome</b></td>
<td class="td" width="100px" align="center"><b>Data</b></td>
<td class="td" width="100px" align="center"><b>Visualizar</b></td>
<td class="td" width="100px" align="center"><b>Excluir</b></td>
<td class="td" width="100px" align="center"><b>Alterar</b></td>
</tr>
</table>

<?php

$query = "SELECT curriculo.*, candidatos.* 
		  FROM curriculo
		  INNER JOIN candidatos ON candidatos.usuario = curriculo.usuario
		  WHERE (curriculo.usuario = '".$usuario."') and curriculo.D_E_L_E_T_E_ <> '*'";
$query = mysql_query($query) or die("Query invalida: " . mysql_error());


while ($linha = mysql_fetch_array($query)) {

$data= $linha['d_cadastro'];

?>
   
<table class="table" cellspacing="0" cellpadding="0" bgcolor="#E8E8E8" >
	<tr>
		<td width="200px"   ><?php echo $linha['nome'] ?></td>
		<td width="100px" align="center"><?php echo date('d/m/Y', strtotime($data));?></td>
		<td width="100px" align="center">
		<form id="participar" name="participar" method="post" action="viewer_cv.php" target="1'>
				<input name="codigo"  type="hidden"  id="cod"     			value="<?php echo $linha['cod']; ?>" />
				<input name="titulo"  type="hidden"  id="titulo" 			value="<?php echo $linha['titulo']; ?>" />
				<input name="desc" 	  type="hidden"  id="desc"     			value="<?php echo $linha['desc']; ?>" />
				<input name="benef"   type="hidden"  id="benef" 			value="<?php echo $linha['benef']; ?>" />
				<input name="salario" type="hidden"  id="salario" 			value="<?php echo $linha['salario']; ?>" />
				<input name="data"    type="hidden"  id="data" 				value="<?php echo $linha['d_cadastro'];?>" />
				<input name="hora"    type="hidden"  id="hora" 				value="<?php echo $linha['h_cadastro'];?>" />
				<input name="Submit"  type="image"   src="../img/ver.gif" 	value="participar" alt="botão" />
			</form>
		</td>
		<td width="100px" align="center">
		<form action="excluir_curriculo.php" method="post" enctype="multipart/form-data" name="excluir" >
		<input name="codigo" type="hidden" id="id" value="<?php echo $linha['usuario']; ?>" />
		<input name="excluir" type="image" src="../img/delete1.png" value="excluir" alt="botão" onclick="return confirma()" />
		</form>
		</td>
		<td width="100px" align="center">
			<form id="participar" name="participar" method="post" action="editar_curriculo.php">
				<input name="codigo"  type="hidden"  id="cod"     			value="<?php echo $linha['cod']; ?>" />
				<input name="titulo"  type="hidden"  id="titulo" 			value="<?php echo $linha['titulo']; ?>" />
				<input name="desc" 	  type="hidden"  id="desc"     			value="<?php echo $linha['desc']; ?>" />
				<input name="benef"   type="hidden"  id="benef" 			value="<?php echo $linha['benef']; ?>" />
				<input name="salario" type="hidden"  id="salario" 			value="<?php echo $linha['salario']; ?>" />
				<input name="data"    type="hidden"  id="data" 				value="<?php echo $linha['d_cadastro'];?>" />
				<input name="hora"    type="hidden"  id="hora" 				value="<?php echo $linha['h_cadastro'];?>" />
				<input name="Submit"  type="image"   src="../img/alterar.jpg" 	value="participar" alt="botão" />
			</form>
		</td>
	</tr>
</table>
<?php } ?>
<br />
<br />
<?php } ?>
</body>
</html>