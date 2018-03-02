<?php
    include "../config.php";
    include "../valida_user.inc";
	
	$candidato = $_POST['candidato'];
	 
	$query = "SELECT candidatos.*, curriculo.* FROM curriculo 
	INNER JOIN candidatos ON candidatos.usuario = curriculo.usuario
	WHERE curriculo.usuario = '".$candidato."' AND curriculo.D_E_L_E_T_E_ = ''";
	$exec  = mysql_query($query);
	$regs  = mysql_num_rows($exec);
	$dados = mysql_fetch_array ($exec);
	 
	$data = date("d/m/Y"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Currículo | Maiorino Comunicação  | <?php echo utf8_encode($dados['nome']); ?></title>
<style>
Body {
	widht: 100%;
	color: #000;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-weight: normal;
	margin: 0px;
}
#main {
	width: 77,9%;
	margin-left: auto;
	margin-right: auto;
	background-color: #FFF;
	padding: 45px;
}
table{
	width: 100%;
}
td{
	padding: 5px;
}
.titulo{
	font-size: 22px;
	color: #FFF;
}
.label{
	color: #FFFFFF;
}
</style>

</head>
<body>
<div id="main">
<center><img width="400px" height="80" src="../img/Logo-Maiorino-Comunicacao.png">
<br />
<br />
<br />
<p><h2>Currículo - Candidato do Portal Web</h2></center></p>
<br />

<!-- Dados de Contato -->

<table cellspacing="1" cellpadding="0">
	<tr>
		<td class="label" bgcolor="#F78F1E" ROWSPAN="3" width="70%" color="#FFFFFF"><b><span class="titulo"><?php echo utf8_encode($dados['nome']); ?></span>
		<br /><?php echo $dados['aniversario']; ?>, <?php echo $dados['nacional']; ?>, <?php echo $dados['natural']; ?>, <?php echo $dados['est_civil']; ?>
		<br />
		<br /><?php echo $dados['objetivo']; ?></b></td>
		<td align="right" bgcolor="#E8E8E8"><?php echo $dados['email']; ?></td>
		<tr>
			<td align="right" bgcolor="#E8E8E8"><?php echo $dados['tel_fixo']; ?></td>
		</tr>
		<tr>
			<td align="right" bgcolor="#E8E8E8"><?php echo $dados['tel_cel']; ?></td>
	</tr>
</table>

<!-- Mini Currículo -->

<br />

<table>
	<tr>
		<td  class="label" bgcolor="#F78F1E" ROWSPAN="3" width="30%"><b>Perfil</b></td>
		<td bgcolor="#E8E8E8"><?php echo nl2br($dados['minicv']); ?></td>
	</tr>
</table>

<!-- Habilidades -->

<br />
<table>
<tr>
<td  class="label" bgcolor="#F78F1E" width="30%"><b>Habilidades</b></td>
		<td bgcolor="#E8E8E8"><?php echo $dados['habilidade']; ?></td>
</tr>
</table>

<!-- Informações -->

<br />
	<table>
		<tr>
			<td  class="label" bgcolor="#F78F1E" ROWSPAN="3" width="30%"><b>Informações</b></td>
			<td bgcolor="#E8E8E8"><?php echo nl2br($dados['outras_infos']); ?></td>
		</tr>
	</table>

<!-- Graduação 1 -->

<br />

<?php if ($dados['instituicao1'] == '') { ?>
	<table>
		<!-- Mostra tabela vazia -->
	</table>
	
<br />

<?php } else { ?>

	<table>
		<tr>
			<td  class="label" bgcolor="#F78F1E" ROWSPAN="2" width="30%"><b>Graduação</b></td>
			<td bgcolor="#E8E8E8"><?php echo $dados['instituicao1']; ?></td>
				<tr>
					<td bgcolor="#E8E8E8"><?php echo $dados['curso1']; ?> | <?php echo $dados['inicio1']; ?> - <?php echo $dados['termino1']; ?></td>
				</tr>
		</tr>
	</table>
<br />
<?php } ?>

<!-- Graduação 2 -->
	

<?php if ($dados['instituicao2'] == '') { ?>
	<table>
		<!-- Mostra tabela vazia -->
	</table>
<?php } else { ?>

	<table>
		<tr>
			<td  class="label" bgcolor="#F78F1E" ROWSPAN="2" width="30%"><b></b></td>
			<td bgcolor="#E8E8E8"><?php echo $dados['instituicao2']; ?></td>
			<tr>
				<td bgcolor="#E8E8E8"><?php echo $dados['curso2']; ?> | <?php echo $dados['inicio2']; ?> - <?php echo $dados['termino2']; ?></td>
			</tr>
		</tr>
	</table>
<br />
<?php } ?>

<!-- Experiência 1 -->

<table>
	<tr>
		<td  class="label" bgcolor="#F78F1E" ROWSPAN="3" width="30%"><b>Experiência</b></td>
			<td bgcolor="#E8E8E8"><?php echo $dados['cargo1']; ?> | <?php echo $dados['entrada1']; ?> - <?php echo $dados['saida1']; ?></td>
				<tr>
					<td bgcolor="#E8E8E8"><?php echo $dados['empresa1']; ?></td>
				</tr>
				<tr> 
				<td bgcolor="#E8E8E8"><?php echo $dados['atribuicoes1']; ?></td>
				</tr>
	</tr>
</table>

<!-- Experiência 2 -->

<br />

<?php if ($dados['empresa2'] == '') { ?>

	<table>
			<!-- Mostra tabela vazia -->
	</table>

<?php } else { ?>

	<table>
		<tr>
			<td  class="label" bgcolor="#F78F1E" ROWSPAN="3" width="30%"></td>
			<td bgcolor="#E8E8E8"><?php echo $dados['cargo2']; ?> | <?php echo $dados['entrada2']; ?> - <?php echo $dados['saida2']; ?></td>
				<tr>
					<td bgcolor="#E8E8E8"><?php echo $dados['empresa2']; ?></td>
				</tr>
				<tr> 
					<td bgcolor="#E8E8E8"><?php echo $dados['atribuicoes2']; ?></td>
				</tr>
		</tr>
	</table>
<br />	

<!-- Experiência 3 -->

<?php } ?>


<?php if ($dados['empresa3'] == '') { ?>
	<table>
		<!-- Mostra tabela vazia -->
	</table>

<?php } else { ?>
	<table>
		<tr>
			<td  class="label" bgcolor="#F78F1E" ROWSPAN="3" width="30%"><b></b></td>
			<td bgcolor="#E8E8E8"><?php echo $dados['cargo3']; ?> | <?php echo $dados['entrada3']; ?> - <?php echo $dados['saida3']; ?></td>
				<tr>
					<td bgcolor="#E8E8E8"><?php echo $dados['empresa3']; ?></td>
				</tr>
				<tr> 
					<td bgcolor="#E8E8E8"><?php echo $dados['atribuicoes3']; ?></td>
				</tr>
		</tr>
	</table>
<br />
<?php } ?>

<!-- Endereço -->

<table>
	<tr>
	<td  class="label" bgcolor="#F78F1E" ROWSPAN="3" width="30%"><b>Endereço</b></td>
		<td bgcolor="#E8E8E8"><?php echo $dados['logradouro']; ?>, <?php echo $dados['numero']; ?></td>
			<tr>
				<td bgcolor="#E8E8E8"><?php echo $dados['cep']; ?> - <?php echo $dados['bairro']; ?></td>
			</tr>
			<tr> 
				<td bgcolor="#E8E8E8"><?php echo $dados['cidade']; ?> - <?php echo $dados['UF']; ?></td>
			</tr>
	</tr>
</table>
<br />		
<table>	
	<tr>
		<td align="right" bgcolor="#E8E8E8">Currículo impresso em: <?php echo $data ?> pelo portal do candidato.</td>
	</tr>
</table>

<!-- Fim dos módulos -->

</div id="main">
</body>
</html>