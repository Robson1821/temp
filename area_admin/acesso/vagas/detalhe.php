<?php
include "../config.php";
include "../valida_user.inc";

$codigo		= $_POST['codigo'];
$vaga 		= $_POST['titulo'];
$desc		= $_POST['desc'];
$benef		= $_POST['benef'];
$salario	= $_POST['salario'];
$data		= $_POST['data'];
$status		= $_POST['status'];
$voltar		= '<a href="lista.php">Voltar</a>';
$candidatar = '<a href="cadcadastro.php?cod='.$codigo.'">Participar</a>';

$excluir  = '<a href="excluir_vaga.php?cod='.$codigo.'">Excluir</a>';
$alterar  = '<a href="alterar_vaga.php?id='.$codigo.'">Alterar</a>';
$encerrar = '<a href="encerrar_vaga.php?cod='.$codigo.'">Encerrar</a>';

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
	width: 150px;
	background-color: #5C2E91;
	color: #FFF;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	padding: 5px 5px 5px 5px;
	font-weight:bold;
}
.input{
	width: 425px;
	background-color: #E8E8E8;
	color: #000;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	padding: 5px 5px 5px 5px;
}
iframe {
	margin-top: 10px;
	border-top: 1px solid #F78F1E;
	border-left: 0px;
	border-right: 0px;
	border-bottom: 1px solid #F78F1E;
}
</style>
<script language="javascript">
function encerra(){
        if(confirm('Tem certeza que deseja encerrar esta vaga?'))
                return true;
        else
                return false;
}
</script>
<script language="javascript">
function excluir(){
        if(confirm('Tem certeza que deseja excluir esta vaga?'))
                return true;
        else
                return false;
}
</script>
</head>

<body>
<div>
<br />
<?php if ($status==1) { ?>
<table>
	<tr>
		<td class="h2" width="100" onclick="return excluir()"><?php echo $excluir ?></td>
		<td class="h2" width="100" ><?php echo $alterar ?></td>
		<td class="h2" width="100" onclick="return encerra()"><?php echo $encerrar ?></td>
	</tr>
</table>
<?php } Else { ?>
<table>
	<tr>
		<td class="h3">Esta vaga já foi encerrada!</td>
	</tr>
</table>
<br />
<br />
<br />
<?php } ?>

<br />

<table>
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
		<td class="input"><?php echo nl2br($desc); ?></td>
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
</div>
<?php if ($status==2) { } Else { ?>
<iframe src="participando.php?id=<?php echo $codigo ?>" scrolling="auto" marginwidth="0" marginheight="0" name="detalhe" frameborder="0" vspace="0" hspace="0" width="595px" height="160px">
</iframe>
<?php } ?>
</body>
</html>