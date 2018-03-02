<?php
     include "../config.php";
     include "../valida_user.inc";
	 
mysql_connect($Host, $User, $Senha);
mysql_select_db($Base);

$codigo = $_GET['id'];

$query = "SELECT COUNT(*)
		  FROM vaga_candidato
		  INNER JOIN vagas ON vagas.cod = vaga_candidato.cod_vaga
		  INNER JOIN candidatos ON vaga_candidato.cod_candidato = candidatos.usuario
		  WHERE vagas.cod = '".$codigo."' and vaga_candidato.cod_vaga = '".$codigo."'";
$query = mysql_query($query) or die("Query invalida: " . mysql_error());
$query = mysql_fetch_array($query);
$total = $query[0];



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
}
.h3 {
	font-family: Verdana, Geneva, sans-serif;
	clear: both;
	color:#F78F1E;
	font-size: 24px;
	font-weight:bold;
}
.tr{
	color: #fff;
	padding: 5px;
}
.td{
	padding: 5px;
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

<body>

<?php if ($total == 0) { ?>
<br />
<br />
<br />
<br />
<center><span class="h3">Não há candidatos para esta vaga.</span></center>

<?php } Else { ?>

Existem <b><?php echo $total ?></b> candidaturas para esta vaga
<br />
<br />
<table cellspacing="0" bgcolor="#5C2E91" cellpadding="0">
<tr>
<td class="tr" width="480px" ><b>Nome<b></td>
<td class="tr" width="80px"  align="center"><b>Currículo</b></td>

</tr>
</table>

<?php

$query = "SELECT vagas.*, vaga_candidato.cod_vaga, vaga_candidato.cod_candidato, candidatos.*
		  FROM vaga_candidato
		  INNER JOIN vagas ON vagas.cod = vaga_candidato.cod_vaga
		  INNER JOIN candidatos ON vaga_candidato.cod_candidato = candidatos.usuario
		  WHERE vagas.cod = '".$codigo."'";
$query = mysql_query($query);

while ($linha = mysql_fetch_array($query)) {

?>
   
<table class="table" cellspacing="0" cellpadding="0" bgcolor="#E8E8E8" bordercolorlight="#666666">
<tr>
<td class="td" width="480px" ><?php echo $linha['nome'] ?></td>
<td class="td" width="80px"  align="center">
	<form id="participar" name="participar" method="post" action="../candidatos/viewer_cv.php" target="1">
	<input name="cog"  type="hidden"  id="cod"     			value="<?php echo $linha['cod']; ?>" />
	<input name="candidato"  type="hidden"  id="candidato" 			value="<?php echo $linha['usuario']; ?>" />
	<input name="excluir" type="image" src="../img/ver.gif" alt="botão" />
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