<?php
     include "../config.php";
     include "../valida_user.inc";
	 
mysql_connect($Host, $User, $Senha);
mysql_select_db($Base);

$begin = @$_GET['begin'];
if (!$begin) { $begin = 0; }

$query = 'SELECT COUNT(*) FROM vagas WHERE D_E_L_E_T_E_ = " "';
$query = mysql_query($query);
$query = mysql_fetch_array($query);
$total = $query[0];

$query1 = 'SELECT COUNT(*) FROM vagas WHERE D_E_L_E_T_E_ = " " AND status = "1"';
$query1 = mysql_query($query1);
$query1 = mysql_fetch_array($query1);
$ativas= $query1[0];


if($total==0){
     $anteriores = 'Anterior';
     $proximos = 'Próximo';
}
else {
if (($begin > 0) and ($begin <= 10)) {
   $anteriores = '<a href="lista.php?begin=0">Anterior</a>';
} elseif (($begin > 0) and ($begin > 10)) {
   $anteriores = '<a href="lista.php?begin=' . ($begin-10) . '">Anterior</a>';
} else {
   $anteriores = 'Anterior';
}

if (($begin < $total) and (($begin+10) >= $total)) {
   $proximos = 'Próximo';
} else {
   $proximos = '<a href="lista.php?begin=' . ($begin+10) . '">Próximo</a>';
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-weight: normal;
	padding-top: 15px;
	padding-left:35px;
	background:#ccc;
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
</style>

</head>
<body>
	<br>
    <font class="h3">Visualizar Vagas</font>
	<br />
	<br />
	<br />
	Existe(m) <b><?php echo $total; ?></b> vagas(s) cadastradas no sistema. Destas, <b><?php echo $ativas; ?></b> estão ativas.
	<br />
	<br />
<table cellspacing="0" bgcolor="#5C2E91" cellpadding="5">
<tr>
<td class="td" width="40px" align="center"></td>
<td class="td" width="120px" ><b>Código</b></td>
<td class="td" width="230px" ><b>Vaga</b></td>
<td class="td" width="100px" align="center"><b>Data</b></td>
<td class="td" width="80px"  align="center"><b>+ Infos</b></td>
</tr>
</table>
<?php

$query = 'SELECT * FROM vagas WHERE D_E_L_E_T_E_ = " " ORDER BY cod ASC LIMIT '.$begin.' , 10';
$query = mysql_query($query);

while ($linha = mysql_fetch_array($query)) {

$data= $linha['d_cadastro'];
$status = $linha['status'];

?>
<table class="table" cellspacing="0" cellpadding="5" bgcolor="#E8E8E8" >
	<tr>
		<td width="40px" align="center"><?php if ($status == 1) { ?><img src="../img/sgreen.png" width="15" height="15"/><?php } Else { ?><img src="../img/sred.png" width="15" height="15"/><?php } ?></td>
		<td width="120px" >MRN002013<?php echo $linha['cod'] ?></td>
		<td width="230px" ><?php echo $linha['titulo'] ?></td>
		<td width="100px" align="center"><?php echo date('d/m/Y', strtotime($data));?></td>
		<td width="80px"  align="center">
			<form id="participar" name="participar" method="post" action="detalhe.php">
				<input name="codigo"  type="hidden"  id="cod"     			value="<?php echo $linha['cod']; ?>" />
				<input name="titulo"  type="hidden"  id="titulo" 			value="<?php echo $linha['titulo']; ?>" />
				<input name="desc" 	  type="hidden"  id="desc"     			value="<?php echo $linha['desc']; ?>" />
				<input name="benef"   type="hidden"  id="benef" 			value="<?php echo $linha['benef']; ?>" />
				<input name="salario" type="hidden"  id="salario" 			value="<?php echo $linha['salario']; ?>" />
				<input name="data"    type="hidden"  id="data" 				value="<?php echo $linha['d_cadastro'];?>" />
				<input name="hora"    type="hidden"  id="hora" 				value="<?php echo $linha['h_cadastro'];?>" />
				<input name="status"  type="hidden"  id="status" 			value="<?php echo $linha['status'];?>" />
				<input name="Submit"  type="image"   src="../img/ver.gif" 	value="participar" alt="botão" />
			</form>
		</td>
	</tr>
</table>
<?php } ?>
<br />
<br />
  <font class="h2"><center><?php echo $anteriores . " | " . $proximos; ?></center></font>
</body>
</html>