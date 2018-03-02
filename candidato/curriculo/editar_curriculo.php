<?php
    include "../config.php";
    include "../valida_user.inc";
	 
	$query = "SELECT candidatos.*, curriculo.* FROM curriculo 
	INNER JOIN candidatos ON candidatos.usuario = curriculo.usuario
	WHERE curriculo.usuario = '".$usuario."' AND curriculo.D_E_L_E_T_E_ = ''";
	$exec  = mysql_query($query);
	$regs  = mysql_num_rows($exec);
	$dados = mysql_fetch_array ($exec);
	 
	$data = date("d/m/Y"); 
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
legend{
	width: 200px;
	background-color: #F78F1E;
	padding: 5px;
	color: #FFF;
	font-weight:bold;
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
.style1{
	font-size: 10px;
}
.style2{
	font-size: 10px;
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
<br />
<font class="h3">Cadastrar Currículo</font>
<br />
<br />
<br />
<br />
<table width="600" border="0" cellpadding="0" cellspacing="0" class="fundo">
   <tr>
    <td>
	   <form name="enviar" id="enviar" method="post" action="upcurriculo.php" class="form">
	  
<?php

$query = "SELECT * FROM candidatos WHERE usuario = '".$usuario."'";
$query = mysql_query($query);

$linha = mysql_fetch_array($query) 

?>
	  
<!-- Área Dados Pessoais -->
	<legend>Dados Pessoais</legend>
	<br />
		<table width="95%" border="0" align="center">
				<tr>
					<td class="label">Nome</td>
					<td class="input"><input name="nome" type="text" id="nome" size="35" value="<?php echo $linha['nome'] ?>" readonly="readonly"/></td>
				</tr>
				<tr>
					<td class="label">E-mail</td>
					<td class="input"><input name="email" type="text" id="email" size="30" value="<?php echo $linha['email'] ?>" readonly="readonly"/></td>
				</tr>
				<tr>
					<td class="label">Sexo</td>
					<td class="input"><input name="sexo" type="text" value="<?php echo $dados['sexo'] ?>" readonly="readonly"/>
				</tr>
				<tr>
					<td class="label">Estado Civil </td>
					<td class="input"><input name="estadocivil" type="text" value="<?php echo $dados['est_civil']; ?>" />
					</td>
				</tr>
				<tr>
					<td class="label">Data de Nascimento </td>
					<td class="input"><input name="anonasc" type="text" id="anonasc" size="10" maxlength="10" value="<?php echo $dados['aniversario']; ?>" readonly="readonly"/></td>
				</tr>
				<tr>
					<td class="label">Est&aacute; Empregado </td>
					<td class="input"><input name="empregado" type="text" value="<?php echo $dados['emp_atual']; ?>" />
				</tr>
				<tr>
					<td class="label">Nacionalidade</td>
					<td class="input" ><input type="text" name="nacionalidade" value="<?php echo $dados['nacional']; ?>" readonly="readonly"/></td>
			  </tr>
				<tr>
					<td class="label">Naturalidade</td>
					<td class="input"><input name="naturalidade" id="naturalidade" value="<?php echo $dados['natural']; ?>" readonly="readonly"/></input>
				</td>
			  </tr>
		</table>
		<br /> 
<!-- Fim da Área de Dados Pessoais -->




<!-- Área Endereço -->
		
			<legend>Endere&ccedil;o</legend>
            <br>
            <table width="95%"  border="0" align="center">
				<tr>
					<td class="label" >CEP:</td>
					<td class="input"><input name="cep" type="text" id="cep" size="10" value="<?php echo $dados['cep']; ?>" /></td>
				</tr>
				<tr>
					<td class="label" >Logradouro:</td>
					<td class="input"><input name="logradouro" type="text" id="logradouro" size="35" value="<?php echo $dados['logradouro']; ?>" /></td>
				</tr>
				<tr>
					<td class="label">Número:</td>
					<td class="input"><input name="numero" type="text" id="numero" size="10" value="<?php echo $dados['numero']; ?>" /></td>
				</tr>
				<tr>
					<td class="label" >Bairro:</td>
					<td class="input"><input name="bairro" type="text" id="bairro" size="30" value="<?php echo $dados['bairro']; ?>" /></td>
				</tr>
				<tr>
					<td class="label">Cidade:</td>
					<td class="input"><input name="cidade" type="text" id="cidade" size="30" value="<?php echo $dados['cidade']; ?>" /></td>
				</tr>
				<tr>
					<td class="label" width="206">UF:</td>
					<td class="input"><input name="uf" type="text" id="uf" size="5" value="<?php echo $dados['UF']; ?>" /></td>
				</tr>
            </table>
			<br />
<!-- Final da Área Contorno -->


		
<!-- Área Contato -->	

        <legend>Dados de Contato</strong></legend>
        <br>
 
            <table width="95%"  border="0" align="center">
              <tr>
                <td class="label" >Telefone Residencial </td>
                <td class="input"><input name="telfixo" type="text"  id="telfixo" size="20" maxlength="15" value="<?php echo $dados['tel_fixo']; ?>" /></td>
              </tr>
              <tr>
                <td class="label" >Telefone Celular</td>
                <td class="input"><input name="telcel" type="text" id="telcel" size="20" maxlength="15" value="<?php echo $dados['tel_cel']; ?>" /></td>
              </tr>
            </table>
			<br />
<!-- Final da Área Contato -->



<!-- Área Objetivos -->
            
<legend>Objetivos</legend>
<br>
	<table width="95%"  border="0" align="center">
		<tr>
			<td class="label" >Objetivo</td>
			<td class="input"><input name="objetivo" cols="30" rows="3" id="objetivo" value="<?php echo $dados['objetivo']; ?>"/></td>
		</tr>
		<tr>
			<td class="label" >Pretens&atilde;o </td>
			<td class="input"><input name="salario" type="text" id="salario" value="<?php echo $dados['pretensao']; ?>"/></td>
		</tr>
	</table>
	<br />
<!-- Final da Área Objetivo -->



<!-- Área Habilidades -->
<legend>Habilidades</legend>
<br>
	<table width="95%"  border="0" align="center">
		<tr>
			<td class="label">Habilidades<br />
				<span class="style1">Informe habilidades em informática, idiomas, etc.</span>
			</td>
			<td class="input"><textarea name="habilidades" cols="30" rows="4" id="habilidades" ><?php echo $dados['habilidade']; ?></textarea>
			</td>
		</tr>
	</table>
<br />
<!-- Final Área Habilidades -->



<!-- Área Mini Currículo -->
<legend>Minicurr&iacute;culo</legend>
<br />
	<table width="95%"  border="0" align="center">
		<tr>
			<td class="label">
				<span class="style1">* &Eacute; atrav&eacute;s do minicurr&iacute;culo que a empresa se interessar&aacute; pelo seu curr&iacute;culo. 
					Torne-o bem atrativo colocando suas principais caracter&iacute;sticas profissionais.</span>
			</td>
			<td class="input">
				<b>Aten&ccedil;&atilde;o:</b> 
				<span class="style2">o tamanho m&aacute;ximo de um minicurr&iacute;culo &eacute; de 500 caracteres.<br /></span><br />
				<textarea name="minicv" cols="30" rows="6" id="minicv"><?php echo $dados['minicv']; ?></textarea>
			</td>
        </tr>
	</table>
<br />
<!-- Final Área Mini Currículo -->



<!-- Área Outras Informações -->			
<legend>Outras Informações</legend>
<br />
	<table width="95%"  border="0" align="center">
		<tr>
			<td class="label">Cursos/Especializa&ccedil;&otilde;es<br />
				<span class="style1">Informe cursos extra-curriculares e outras especializa&ccedil;&otilde;es</span>
			</td>
			<td class="input"><textarea name="outrasinfos" cols="30"  id="outrasinfos"><?php echo $dados['outras_infos']; ?></textarea>
			</td>
		</tr>
</table>
<br />
<!-- Final Área Outras Informações -->



<!-- Área Formação 1 -->
<br>
<legend>Forma&ccedil;&atilde;o n. 1</legend>
<br />
<span class=explainred><B>Aten&ccedil;&atilde;o:</B> Inclua suas forma&ccedil;&otilde;es a partir da mais recente e at&eacute; a mais antiga.
<br />
<br />
</span>
<table width="95%"  border="0" align="center">
              <tr>
                <td class="label">Forma&ccedil;&atilde;o </td>
                <td class="input"><input name="formacao1" value="<?php echo $dados['formacao1']; ?>" /></td>
			</tr>
			<tr>
                <td class="label">Curso</td>
                <td class="input"><input name="curso1" type="text"  id="Curso" size="30" value="<?php echo $dados['curso1']; ?>" /></td>
              </tr>
              <tr>
                <td class="label">In&iacute;cio</td>
                <td class="input"><input name="inicio1" type="text" id="inicio1" size="8" maxlength="8" value="<?php echo $dados['inicio1']; ?>" /></td><td>
				</tr>
				<tr>
				<td class="label">T&eacute;rmino</span></td>
                <td class="input"><input name="termino1" type="text" id="termino1" size="8" maxlength="8" value="<?php echo $dados['termino1']; ?>" /></td>
            </tr>
            <tr>
                <td class="label">Institui&ccedil;&atilde;o</td>
                <td class="input"><input name="instituicao1" type="text" id="instituicao1" size="40" value="<?php echo $dados['instituicao1']; ?>" /></td>
              </tr>
            </table>
            <br>
<!-- Final Área Formação 1 -->
			
			
			
<!-- Final Área Formação 2 -->			
<legend>&nbsp;Forma&ccedil;&atilde;o n. 2 &nbsp;</legend>
<br>
	<table width="95%"  border="0" align="center">
		<tr>
			<td class="label"><span class=explain>Forma&ccedil;&atilde;o </span></td>
			<td class="input"><input name="formacao2" value="<?php echo $dados['formacao2']; ?>" /></td>
		</tr>
		<tr>
            <td class="label"><span class=explain>Curso </span></td>
            <td class="input"><input name="curso2" type="text" id="curso2" size="30" value="<?php echo $dados['curso2']; ?>" /></td>
        </tr>
		<tr>
            <td class="label"><span class=explain>In&iacute;cio</span></td>
            <td class="input"><input name="inicio2" type="text" class="bgform" id="inicio2" size="8" maxlength="8" value="<?php echo $dados['inicio2']; ?>" /></td>
		</tr>
		<tr>
            <td class="label"><span class=explain>T&eacute;rmino</span></td>
            <td class="input"><input name="termino2" type="text" id="termino2" size="8" maxlength="8" value="<?php echo $dados['termino2']; ?>" /></td>
        </tr>
            <td class="label"><span class=explain>Institui&ccedil;&atilde;o </span></td>
            <td class="input"><input name="instituicao2" type="text" id="instituicao2" size="40" value="<?php echo $dados['instituicao2']; ?>" /></td>
        </tr>
    </table>
<br />
<!-- Final Área Formação 2 -->



<!-- Área Experiência 1 -->
<legend>&nbsp;Experi&ecirc;ncia Profissional n.1 &nbsp;</legend>
<br />
<span class=explainred><b>Aten&ccedil;&atilde;o:</b> Inclua suas experi&ecirc;ncias profissionais a partir da mais recente at&eacute; a mais antiga</span>
<br />
<br />
    <table width="95%"  border="0" align="center">
        <tr>
            <td class="label">Entrada</td>
            <td class="input"><input name="entrada1" type="text" id="entrada1" size="10" maxlength="20" value="<?php echo $dados['entrada1']; ?>" /></td>
        </tr>
		<tr>
            <td class="label">Saída</td>
            <td class="input"><input name="saida1" type="text" id="saida1" size="10" maxlength="20" value="<?php echo $dados['saida1']; ?>" /></td>
        </tr>
        <tr>
            <td class="label">Nome da empresa</td>
            <td class="input"><input name="empresa1" type="text"id="empresa1" size="35" value="<?php echo $dados['empresa1']; ?>" /></td>
        </tr>
        <tr>
            <td class="label">&Uacute;ltimo Cargo</td>
            <td class="input"><input name="cargo1" type="text"  id="cargo1" size="30" value="<?php echo $dados['cargo1']; ?>" /></td>
        </tr>
        <tr>
            <td class="label">Atribui&ccedil;&otilde;es / Realiza&ccedil;&otilde;es no cargo</td>
            <td class="input"><textarea name="atribuicoes1" cols="30" rows="3" id="atribuicoes1"><?php echo $dados['atribuicoes1']; ?></textarea></td>
        </tr>
    </table>
<br />
<!-- Final Área Experiência 1 -->




<!-- Área Experiência 2 -->
<legend>&nbsp;Experi&ecirc;ncia Profissional n.2 &nbsp;</legend>
<br />
    <table width="95%"  border="0" align="center">
        <tr>
            <td class="label">Entrada</td>
            <td class="input"><input name="entrada2" type="text" id="estrada2" size="10" maxlength="20" value="<?php echo $dados['entrada2']; ?>" /></td>
        </tr>
		<tr>
            <td class="label">Saída</td>
            <td class="input"><input name="saida2" type="text" id="saida2" size="10" maxlength="20" value="<?php echo $dados['saida2']; ?>" /></td>
        </tr>
        <tr>
            <td class="label">Nome da empresa</td>
            <td class="input"><input name="empresa2" type="text" id="empresa2" size="35" value="<?php echo $dados['empresa2']; ?>" /></td>
        </tr>
        <tr>
            <td class="label">&Uacute;ltimo Cargo</td>
            <td class="input"><input name="cargo2" type="text" id="cargo2" size="30" value="<?php echo $dados['cargo2']; ?>" /></td>
        </tr>
        <tr>
            <td class="label">Atribui&ccedil;&otilde;es / Realiza&ccedil;&otilde;es no cargo</td>
            <td class="input"><textarea name="atribuicoes2" cols="30" rows="3" id="atribuicoes2"><?php echo $dados['atribuicoes2']; ?></textarea></td>
        </tr>
    </table>
<br />
<!-- Final Área Experiência 2 -->



<!-- Área Experiência 3 -->
<legend>&nbsp;Experi&ecirc;ncia Profissional n.3 &nbsp;</legend>
<br />
    <table width="95%"  border="0" align="center">
        <tr>
            <td class="label">Entrada</td>
            <td class="input"><input name="entrada3" type="text" id="entrada3" size="10" maxlength="20" value="<?php echo $dados['entrada3']; ?>" /></td>
        </tr>
		<tr>
            <td class="label">Saída</td>
            <td class="input"><input name="saida3" type="text" id="saida3" size="10" maxlength="20" value="<?php echo $dados['saida3']; ?>" /></td>
        </tr>
        <tr>
            <td class="label">Nome da empresa</td>
            <td class="input"><input name="empresa3" type="text" id="empresa3" size="35" value="<?php echo $dados['empresa3']; ?>" /></td>
        </tr>
        <tr>
            <td class="label">&Uacute;ltimo Cargo</td>
            <td class="input"><input name="cargo3" type="text"  id="cargo3" size="30" value="<?php echo $dados['cargo3']; ?>" /></td>
        </tr>
        <tr>
            <td class="label">Atribui&ccedil;&otilde;es / Realiza&ccedil;&otilde;es no cargo</td>
            <td class="input"><textarea name="atribuicoes3" cols="30" rows="3" id="atribuicoes3"><?php echo $dados['atribuicoes3']; ?></textarea></td>
        </tr>
    </table>
<br />


<!-- Final Área Experiência 3 -->

<tr>
	<td>
		<p align="center">
            <button name="Enviar" type="submit" id="Enviar" onClick="" value="Gravar">Gravar</button>
		</p>
      </form>
	</td>
</tr>
</table>
</body>
</html>

