<?php
     include "../config.php";
     include "../valida_user.inc";
	 
mysql_connect($Host, $User, $Senha);
mysql_select_db($Base);

$begin = @$_GET['begin'];
if (!$begin) { $begin = 0; }

$query = "SELECT COUNT(*) FROM vaga_candidato WHERE cod_candidato = '".$usuario."' AND status < '2'";
$query = mysql_query($query);
$query = mysql_fetch_array($query);
$total = $query[0];



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
	<br>
    <font class="h3">Boa sorte!</font>
	<br />
	<br />
	<br />
	Você se candidatou a <b><?php echo $total; ?></b> vagas(s).
	<br />
	<br />
<table cellspacing="0" bgcolor="#5C2E91" cellpadding="0">
<tr>
<td class="tr" width="120px" align="center"><b>Código</b></td>
<td class="tr" width="240px" ><b>Vaga</b></td>
<td class="tr" width="120px" align="center"><b>Data</b></td>
<td class="tr" width="80px"  align="center"><b>+ Infos</b></td>

</tr>
</table>

      <?php

$query1 = "SELECT vagas.*, vaga_candidato.cod_vaga, vaga_candidato.cod_candidato 
		  FROM vaga_candidato
		  INNER JOIN vagas ON vagas.cod = vaga_candidato.cod_vaga
		  WHERE (vaga_candidato.cod_candidato = '".$usuario."' AND vagas.status < '2')
		  ORDER BY vagas.cod ASC LIMIT $begin, 10";
$query1 = mysql_query($query1) or die("Query invalida: " . mysql_error());

while ($linha = mysql_fetch_array($query1)) {

$data= $linha['d_cadastro'];

   ?>
   
<table class="table" cellspacing="0" cellpadding="0" bgcolor="#E8E8E8" bordercolorlight="#666666">
<tr>
<td class="td" width="120px"  align="center" >MRN002013<?php echo $linha['cod'] ?></td>
<td class="td" width="240px"><?php echo $linha['titulo'] ?></td>
<td class="td" width="120px" align="center"><?php echo date('d/m/Y', strtotime($data));?></td>
<td class="td" width="80px"  align="center">
	<form id="participar" name="participar" method="post" action="lista_participando.php">
	<label><input name="codigo" type="hidden" id="id" value="<?php echo $linha['cod']; ?>" /></label>
	<label><input name="titulo" type="hidden" id="id" value="<?php echo $linha['titulo']; ?>" /></label>
	<label><input name="desc" type="hidden" id="id" value="<?php echo $linha['desc']; ?>" /></label>
	<label><input name="benef" type="hidden" id="id" value="<?php echo $linha['benef']; ?>" /></label>
	<label><input name="salario" type="hidden" id="id" value="<?php echo $linha['salario']; ?>" /></label>
	<label><input name="data" type="hidden" id="id" value="<?php echo $linha['d_cadastro'];?>" /></label>
	<label><input name="hora" type="hidden" id="id" value="<?php echo $linha['h_cadastro'];?>" /></label>
	<input name="excluir" type="image" src="../img/ver.gif" alt="botão" />
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