<?php
     include "../config.php";
     include "../valida_user.inc";
	 
mysql_connect($Host, $User, $Senha);
mysql_select_db($Base);

$begin = @$_GET['begin'];
if (!$begin) { $begin = 0; }

$query = 'SELECT COUNT(*) FROM candidatos WHERE D_E_L_E_T_E_ <> "*"';
$query = mysql_query($query);
$query = mysql_fetch_array($query);
$total = $query[0];

if($total==0){
     $anteriores = 'Anterior';
     $proximos = 'Próximo';
}
else {
if (($begin > 0) and ($begin <= 5)) {
   $anteriores = '<a href="lista.php?begin=0">Anterior</a>';
} elseif (($begin > 0) and ($begin > 5)) {
   $anteriores = '<a href="lista.php?begin=' . ($begin-5) . '">Anterior</a>';
} else {
   $anteriores = 'Anterior';
}

if (($begin < $total) and (($begin+5) >= $total)) {
   $proximos = 'Próximo';
} else {
   $proximos = '<a href="lista.php?begin=' . ($begin+5) . '">Próximo</a>';
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
.label{
	width: 180px;
	background-color: #5C2E91;
	color: #FFF;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-weight:bold;
	padding: 5px;
}
.input{
	width: 350px;
	background-color: #E8E8E8;
	color: #000;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	border: 0px;
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
	<br>
    <font class="h3">Buscar candidatos</font>
	<br />
	<br />
<table>
	<tr>
		<form name='buscar' id='buscar' method='get' action='<?php echo $_SERVER['PHP_SELF']; ?>' >
		<td class="label">Por habilidade</td>
		<td class="input"><input size="45" name="habilidade" id="habilidade"></input></td>
	</tr>
	<tr>
		<td class="label">Por cidade</td>
		<td class="input"><input size="45" name="cidade" id="cidade"></input></td>
	</tr>
	<tr>
		<td class="label">Por perfil</td>
		<td class="input"><input size="45" name="perfil" id="perfil"></input></td>
	</tr>
	<tr>
	<td><input type='submit' id='buscar' name='buscar' value='Buscar' /></td>
	</tr>
	</form>
</table>
	<br />
	<br />
	 <font class="h2">Resultados</font>
	<br />
	<br />
<table cellspacing="0" bgcolor="#5C2E91" cellpadding="3">
<tr>
<td class="td" width="400px" ><b>Nome</b></td>
<td class="td" width="100px" align="center"><b>Data</b></td>
<td class="td" width="100px" align="center"><b>Visualizar</b></td>
</tr>
</table>

<?php
 
$sqlClientes = "SELECT * FROM curriculo
				INNER JOIN candidatos ON candidatos.usuario = curriculo.usuario
				WHERE curriculo.D_E_L_E_T_E_ <> '*' ";
 
//if ($_GET['buscar'] == 'Buscar') {
if( isset( $_GET['buscar'] ) ) {
 
// busca apenas por habilidade
 
if ($_GET['habilidade'] != " " AND $_GET['cidade'] == " " AND $_GET['perfil'] == " ") {
 
$sqlClientes .= " AND habilidade LIKE '%".$_GET['habilidade']."%' ";
 
}
 
// busca apenas por cidade
 
else if ($_GET['habilidade'] == " " AND $_GET['cidade'] != " " AND $_GET['perfil'] == " ") {
 
$sqlClientes .= " AND cidade LIKE '%".$_GET['cidade']."%' ";
 
}
 
// busca apenas por Perfil
 
else if ($_GET['habilidade'] == " " AND $_GET['cidade'] == " " AND $_GET['perfil'] != " ") {
 
$sqlClientes .= " AND minicv LIKE '%".$_GET['perfil']."%' ";
 
}
 
// busca habilidade e cidade
 
else if ($_GET['habilidade'] != " " AND $_GET['cidade'] != " " AND $_GET['perfil'] == " ") {
 
$sqlClientes .= " AND habilidade LIKE '%".$_GET['habilidade']."%'  AND cidade LIKE '%".$_GET['cidade']."%' ";
 
}
 
// busca habilidade e perfil
 
else if ($_GET['habilidade'] != " " AND $_GET['cidade'] == " " AND $_GET['perfil'] != " ") {
 
$sqlClientes .= " AND habilidade LIKE '%".$_GET['habilidade']."%'  AND minicv LIKE '%".$_GET['perfil']."%' ";
 
}
 
// busca cidade e perfil
 
else if ($_GET['habilidade'] == " " AND $_GET['cidade'] != " " AND $_GET['perfil'] != " ") {

$sqlClientes .= " AND cidade LIKE '%".$_GET['cidade']."%'  AND minicv LIKE '%".$_GET['perfil']."%' ";
 
}
 
// busca habilidade, cidade e perfil
 
else if ($_GET['habilidade'] != " " AND $_GET['cidade'] != " " AND $_GET['perfil'] != " ") {

$sqlClientes .= " AND habilidade LIKE '%".$_GET['habilidade']."%'  AND cidade LIKE '%".$_GET['cidade']."%' AND minicv LIKE '%".$_GET['perfil']."%'";
 
}
 
} // fim do get_buscar


$queryClientes = mysql_query($sqlClientes) or die(mysql_error());
 
while ($row = mysql_fetch_array($queryClientes)) {
 
 $codigo = $row['cod'];
 $user 	 = $row['usuario'];
?>
 
</table>
   
<table class="table" cellspacing="0" cellpadding="3" bgcolor="#E8E8E8" >
	<tr>
		<td width="400px"   ><?php echo $row['nome'] ?></td>
		<td width="100px" align="center"><?php echo date('d/m/Y', strtotime($row['d_cadastro']));?></td>
		<td width="100px" align="center">
		<form id="participar" name="participar" method="post" action="viewer_cv.php" target="1">
				<input name="cog"  			type="hidden"  id="cod"     			value="<?php echo $codigo ?>" />
				<input name="candidato"  	type="hidden"  id="candidato" 			value="<?php echo $user ?>" />
				<input name="Submit"  		type="image"   src="../img/ver.gif" 	value="participar" alt="botão" />
		</td>
		</tr>
	</form>
</table>
<?php } ?>
<br />
<br />
<font class="h1"><center><?php echo $anteriores . " | " . $proximos; ?></center></font>
</body>
</html>