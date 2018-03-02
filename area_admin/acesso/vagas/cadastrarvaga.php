<?php
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
	width: 350px;
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
textarea{
	background-color: #E8E8E8;
	color: #000000;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	border-top: 1px solid #F78F1E;
	border-left: 0px;
	border-right: 1px solid #F78F1E;
	border-bottom: 1px solid #F78F1E;
}
select{
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
    <font class="h3" >Cadastrar Vaga</font>
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
<form name="registrar" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table>
	<tr>
		<td class="label">Vaga:</td>
		<td class="input"><input name="titulo" id="titulo" size="45"/></td>
	</tr>
	<tr>
		<td class="label">Descrição:</td>
		<td class="input"><textarea name="desc" id="desc" rows="5" cols="45"></textarea></td>
	</tr>
	<tr>
		<td class="label">Benefícios:</td>
		<td class="input"><input name="benef" id="benef" size="45"/></td>
	</tr>
	<tr>
		<td class="label">Salário:</td>
		<td class="input"><select name="salario" id="salario">
						<option></option>
						<option value="A Combinar">A Combinar</option>
						<option value="De 700,00 a 1.400,00">De 700,00 a 1.400,00</option>
						<option value="De 1.401,00 a 2.500,00">De 1.401,00 a 2.500,00</option>
						<option value="De 2.501,00 a 3.500,00">De 2.501,00 a 3.500,00</option>
						<option value="De 3.501,00 a 4.500,00">De 3.501,00 a 4.500,00</option>
						<option value="De 4.501,00 a 5.500,00">De 4.501,00 a 5.999,99</option>
						<option value="Acima de 5.501,00">Acima de 6.000,00</option>
						</select></td>
	</tr>
</table>
<br />
<button type="submit" name="enviar" id="enviar">Gravar</button>
</form>
</body>
</html>
<?php

if( isset( $_POST['enviar'] ) ) {

$titulo	 = $_POST['titulo'];
$desc	 = $_POST['desc'];
$benef	 = $_POST['benef'];
$salario = $_POST['salario'];


			$sql1 = "INSERT INTO `maiorino`.`vagas` (`cod`, `titulo`, `desc`, `benef`, `salario`, `d_cadastro`, `h_cadastro`,`status`) 
			VALUES ('','$titulo','$desc','$benef','$salario',current_date,current_time,'1')";
			mysql_query($sql1) or die("Query invalida: " . mysql_error());

			?>
                <script language="JavaScript">
                <!--
                alert("Vaga cadastrada com sucesso!");
				window.location = 'cadastrarvaga.php';
                //-->
                </script>
            <?php

} 
?>