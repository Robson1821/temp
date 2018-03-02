
  <?php
include "../config.php";
include "../valida_user.inc";


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" language="javascript"></script>
<script language="javascript" type="text/javascript">
function validar() {
var naturalidade = enviar.naturalidade.value;
var cep          = enviar.cep.value;
var numero       = enviar.numero.value;
var telfixo      = enviar.telfixo.value;
var telcel       = enviar.telcel.value;
var objetivo     = enviar.objetivo.value;
var habilidades  = enviar.habilidades.value;
var minicv       = enviar.minicv.value;
var formacao1    = enviar.formacao1.value;
var curso1       = enviar.curso1.value;
var inicio1      = enviar.inicio1.value;
var instituicao1 = enviar.instituicao1.value;
var entrada1     = enviar.entrada1.value;
var empresa1     = enviar.empresa1.value;
var cargo1       = enviar.cargo1.value;
var atribuicoes1 = enviar.atribuicoes1.value;

if (naturalidade == "") {
alert('Preencha o estado em que nasceu');
enviar.nome.focus();
return false;
}

if (naturalidade.length < 4) {
alert('Digite o nome do estado completo');
enviar.naturalidade.focus();
return false;
}

if (cep.length < 8) {
alert('Verifique o campo CEP');
enviar.cep.focus();
return false;
}

if (numero == "") {
alert('Preencha o campo com o numero da sua residencia');
enviar.numero.focus();
return false;
}

if (telfixo.length < 13) {
alert('Verifique o campo Telefone Fixo');
enviar.telfixo.focus();
return false;
}

if (telcel.length < 13) {
alert('Verifique o campo Telefone Celular');
enviar.telcel.focus();
return false;
}

if (objetivo == "") {
alert('O campo Objetivo deve ser preenchido');
enviar.objetivo.focus();
return false;
}

if (habilidades == "") {
alert('O campo habilidades deve ser preenchido');
enviar.habilidades.focus();
return false;
}

if (habilidades.length < 50) {
alert('O campo habilidades deve ter no mínimo 50 caracteres');
enviar.habilidades.focus();
return false;
}

if (minicv == "") {
alert('O campo Minicurriculo deve ser preenchido');
enviar.minicv.focus();
return false;
}

if (minicv.length < 50) {
alert('O campo Minicurriculo deve ter no mínimo 50 caracteres');
enviar.minicv.focus();
return false;
}

if (formacao1 == "") {
alert('O campo Formação n1 deve ser preenchido');
enviar.formacao1.focus();
return false;
}

if (curso1 == "") {
alert('O campo Curso da Formação n1 deve ser preenchido');
enviar.curso1.focus();
return false;
}

if (inicio1 == "") {
alert('O campo Inicio da Formação n1 deve ser preenchido');
enviar.inicio1.focus();
return false;
}

if (instituicao1 == "") {
alert('O campo Instituição da Formação n1 deve ser preenchido');
enviar.instituicao1.focus();
return false;
}

if (entrada1 == "") {
alert('O campo Entrada da Formação n1 deve ser preenchido');
enviar.entrada1.focus();
return false;
}

if (empresa1== "") {
alert('O campo Empresa da Formação n1 deve ser preenchido');
enviar.empresa1.focus();
return false;
}

if (cargo1 == "") {
alert('O campo Cargo da Formação n1 deve ser preenchido');
enviar.cargo1.focus();
return false;
}

if (atribuicoes1 == "") {
alert('O campo Atribuicoes da Formação n1 deve ser preenchido');
enviar.atribuicoes1.focus();
return false;
}
}
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#cep").blur(function(e){
		if($.trim($("#cep").val()) != ""){
			$.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val(), function(){
				if(resultadoCEP["resultado"]){
					$("#logradouro").val(unescape(resultadoCEP["tipo_logradouro"])+": "+unescape(resultadoCEP["logradouro"]));
					$("#bairro").val(unescape(resultadoCEP["bairro"]));
					$("#cidade").val(unescape(resultadoCEP["cidade"]));
					$("#uf").val(unescape(resultadoCEP["uf"]));
				}else{
					alert("Não foi possivel encontrar o endereço");
				}
			});				
		}		
	})
});
</script>
<script src="../js/script1.js"></script>
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
.aviso1{
	font-size: 10px;
}
</style>
</head>
<body>

<?php 

$query = "SELECT * FROM curriculo WHERE usuario = '".$usuario."' AND D_E_L_E_T_E_ = ''";
	$exec  = mysql_query($query);
	$regs  = mysql_num_rows($exec);
	$row   = mysql_fetch_array ($exec);
	
	if ($regs > 0) {
?>
<br />
<font class="h3">Cadastrar Currículo</font>
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
Currículo já foi cadastrado!<br />
Para alterar, visualizar e/ou imprimir clique em editar currículo, no menu lateral.
<br />
<br />
<br />
<br />
</td>
</tr>
</table>
<br />

<?php } else { ?>

<br />
<font class="h3">Cadastrar Currículo</font>
<br />
<br />
<br />
<table width="600" border="0" cellpadding="0" cellspacing="0" class="fundo">
   <tr>
    <td>
	   <form name="enviar" id="enviar" method="post" action="cadcurriculo.php" class="form">
	  
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
					<td class="input"><input name="sexo" type="radio" value="masculino">Masc
						<input name="sexo" type="radio" value="feminino">Fem</td>

				</tr>
				<tr>
					<td class="label">Estado Civil </td>
					<td class="input">
					<select name="estadocivil" id="estadocivil">
						<option value= 1></option>
						<option value="Solteiro">Solteiro</option>
						<option value="Casado">Casado</option>
						<option value="Divorciado">Divorciado</option>
						<option value="Viuvo">Viúvo</option>
					</select>
					</td>
				</tr>
				<tr>
					<td class="label">Data de Nascimento * </td>
					<td class="input"><input name="anonasc" type="text" class="bgform" id="anonasc" size="10" maxlength="10"></strong>
					<span class="aviso1">(dd/mm/AAAA)</span></td>
				</tr>
				<tr>
					<td class="label">Est&aacute; Empregado </td>
					<td class="input"><input name="empregado" type="radio" value="Sim">
					Sim
					<input name="empregado" type="radio" value="Não">
					N&atilde;o</td>
				</tr>
				<tr>
					<td class="label">Nacionalidade</td>
					<td class="input">
					<select name="nacionalidade" id="nacionalidade" >
							<option value=" "></option>
							<option value="África do Sul">África do Sul</option>
							<option value="Albânia">Albânia</option>
							<option value="Alemanha">Alemanha</option>
							<option value="Andorra">Andorra</option>
							<option value="Angola">Angola</option>
							<option value="Anguilla">Anguilla</option>
							<option value="Antigua">Antigua</option>
							<option value="Arábia Saudita">Arábia Saudita</option>
							<option value="Argentina">Argentina</option>
							<option value="Armênia">Armênia</option>
							<option value="Aruba">Aruba</option>
							<option value="Austrália">Austrália</option>
							<option value="Áustria">Áustria</option>
							<option value="Azerbaijão">Azerbaijão</option>
							<option value="Bahamas">Bahamas</option>
							<option value="Bahrein">Bahrein</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Barbados">Barbados</option>
							<option value="Bélgica">Bélgica</option>
							<option value="Benin">Benin</option>
							<option value="Bermudas">Bermudas</option>
							<option value="Botsuana">Botsuana</option>
							<option value="Brasil" selected>Brasil</option>
							<option value="Brunei">Brunei</option>
							<option value="Bulgária">Bulgária</option>
							<option value="Burkina Fasso">Burkina Fasso</option>
							<option value="botão">botão</option>
							<option value="Cabo Verde">Cabo Verde</option>
							<option value="Camarões">Camarões</option>
							<option value="Camboja">Camboja</option>
							<option value="Canadá">Canadá</option>
							<option value="Cazaquistão">Cazaquistão</option>
							<option value="Chade">Chade</option>
							<option value="Chile">Chile</option>
							<option value="China">China</option>
							<option value="Cidade do Vaticano">Cidade do Vaticano</option>
							<option value="Colômbia">Colômbia</option>
							<option value="Congo">Congo</option>
							<option value="Coréia do Sul">Coréia do Sul</option>
							<option value="Costa do Marfim">Costa do Marfim</option>
							<option value="Costa Rica">Costa Rica</option>
							<option value="Croácia">Croácia</option>
							<option value="Dinamarca">Dinamarca</option>
							<option value="Djibuti">Djibuti</option>
							<option value="Dominica">Dominica</option>
							<option value="EUA">EUA</option>
							<option value="Egito">Egito</option>
							<option value="El Salvador">El Salvador</option>
							<option value="Emirados Árabes">Emirados Árabes</option>
							<option value="Equador">Equador</option>
							<option value="Eritréia">Eritréia</option>
							<option value="Escócia">Escócia</option>
							<option value="Eslováquia">Eslováquia</option>
							<option value="Eslovênia">Eslovênia</option>
							<option value="Espanha">Espanha</option>
							<option value="Estônia">Estônia</option>
							<option value="Etiópia">Etiópia</option>
							<option value="Fiji">Fiji</option>
							<option value="Filipinas">Filipinas</option>
							<option value="Finlândia">Finlândia</option>
							<option value="França">França</option>
							<option value="Gabão">Gabão</option>
							<option value="Gâmbia">Gâmbia</option>
							<option value="Gana">Gana</option>
							<option value="Geórgia">Geórgia</option>
							<option value="Gibraltar">Gibraltar</option>
							<option value="Granada">Granada</option>
							<option value="Grécia">Grécia</option>
							<option value="Guadalupe">Guadalupe</option>
							<option value="Guam">Guam</option>
							<option value="Guatemala">Guatemala</option>
							<option value="Guiana">Guiana</option>
							<option value="Guiana Francesa">Guiana Francesa</option>
							<option value="Guiné-bissau">Guiné-bissau</option>
							<option value="Haiti">Haiti</option>
							<option value="Holanda">Holanda</option>
							<option value="Honduras">Honduras</option>
							<option value="Hong Kong">Hong Kong</option>
							<option value="Hungria">Hungria</option>
							<option value="Iêmen">Iêmen</option>
							<option value="Ilhas Cayman">Ilhas Cayman</option>
							<option value="Ilhas Cook">Ilhas Cook</option>
							<option value="Ilhas Curaçao">Ilhas Curaçao</option>
							<option value="Ilhas Marshall">Ilhas Marshall</option>
							<option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
							<option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
							<option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
							<option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
							<option value="Índia">Índia</option>
							<option value="Indonésia">Indonésia</option>
							<option value="Inglaterra">Inglaterra</option>
							<option value="Irlanda">Irlanda</option>
							<option value="Islândia">Islândia</option>
							<option value="Israel">Israel</option>
							<option value="Itália">Itália</option>
							<option value="Jamaica">Jamaica</option>
							<option value="Japão">Japão</option>
							<option value="Jordânia">Jordânia</option>
							<option value="Kuwait">Kuwait</option>
							<option value="Latvia">Latvia</option>
							<option value="Líbano">Líbano</option>
							<option value="Liechtenstein">Liechtenstein</option>
							<option value="Lituânia">Lituânia</option>
							<option value="Luxemburgo">Luxemburgo</option>
							<option value="Macau">Macau</option>
							<option value="Macedônia">Macedônia</option>
							<option value="Madagascar">Madagascar</option>
							<option value="Malásia">Malásia</option>
							<option value="Malaui">Malaui</option>
							<option value="Mali">Mali</option>
							<option value="Malta">Malta</option>
							<option value="Marrocos">Marrocos</option>
							<option value="Martinica">Martinica</option>
							<option value="Mauritânia">Mauritânia</option>
							<option value="Mauritius">Mauritius</option>
							<option value="México">México</option>
							<option value="Moldova">Moldova</option>
							<option value="Mônaco">Mônaco</option>
							<option value="Montserrat">Montserrat</option>
							<option value="Nepal">Nepal</option>
							<option value="Nicarágua">Nicarágua</option>
							<option value="Niger">Niger</option>
							<option value="Nigéria">Nigéria</option>
							<option value="Noruega">Noruega</option>
							<option value="Nova Caledônia">Nova Caledônia</option>
							<option value="Nova Zelândia">Nova Zelândia</option>
							<option value="Omã">Omã</option>
							<option value="Palau">Palau</option>
							<option value="Panamá">Panamá</option>
							<option value="Papua-nova Guiné">Papua-nova Guiné</option>
							<option value="Paquistão">Paquistão</option>
							<option value="Peru">Peru</option>
							<option value="Polinésia Francesa">Polinésia Francesa</option>
							<option value="Polônia">Polônia</option>
							<option value="Porto Rico">Porto Rico</option>
							<option value="Portugal">Portugal</option>
							<option value="Qatar">Qatar</option>
							<option value="Quênia">Quênia</option>
							<option value="Rep. Dominicana">Rep. Dominicana</option>
							<option value="Rep. Tcheca">Rep. Tcheca</option>
							<option value="Reunion">Reunion</option>
							<option value="Romênia">Romênia</option>
							<option value="Ruanda">Ruanda</option>
							<option value="Rússia">Rússia</option>
							<option value="Saipan">Saipan</option>
							<option value="Samoa Americana">Samoa Americana</option>
							<option value="Senegal">Senegal</option>
							<option value="Serra Leone">Serra Leone</option>
							<option value="Seychelles">Seychelles</option>
							<option value="Singapura">Singapura</option>
							<option value="Síria">Síria</option>
							<option value="Sri Lanka">Sri Lanka</option>
							<option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
							<option value="St. Lúcia">St. Lúcia</option>
							<option value="St. Vincent">St. Vincent</option>
							<option value="Sudão">Sudão</option>
							<option value="Suécia">Suécia</option>
							<option value="Suiça">Suiça</option>
							<option value="Suriname">Suriname</option>
							<option value="Tailândia">Tailândia</option>
							<option value="Taiwan">Taiwan</option>
							<option value="Tanzânia">Tanzânia</option>
							<option value="Togo">Togo</option>
							<option value="Trinidad & Tobago">Trinidad & Tobago</option>
							<option value="Tunísia">Tunísia</option>
							<option value="Turquia">Turquia</option>
							<option value="Ucrânia">Ucrânia</option>
							<option value="Uganda">Uganda</option>
							<option value="Uruguai">Uruguai</option>
							<option value="Venezuela">Venezuela</option>
							<option value="Vietnã">Vietnã</option>
							<option value="Zaire">Zaire</option>
							<option value="Zâmbia">Zâmbia</option>
							<option value="Zimbábue">Zimbábue</option>
					</select>
				</td>
			  </tr>
				<tr>
					<td class="label">Naturalidade *</td>
					<td class="input"><input name="naturalidade" id="naturalidade"></input>
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
					<td class="label" >CEP: *</td>
					<td class="input"><input name="cep" type="text" id="cep" size="10"><span class="aviso1">Somente números</span></td></td>
				</tr>
				<tr>
					<td class="label" >Logradouro:</td>
					<td class="input"><input name="logradouro" type="text" id="logradouro" size="35" readonly="readonly"></td>
				</tr>
				<tr>
					<td class="label">Número: *</td>
					<td class="input"><input name="numero" type="text" id="numero" size="10"></td>
				</tr>
				<tr>
					<td class="label" >Bairro:</td>
					<td class="input"><input name="bairro" type="text" id="bairro" size="30" readonly="readonly"></td>
				</tr>
				<tr>
					<td class="label">Cidade:</td>
					<td class="input"><input name="cidade" type="text" id="cidade" size="30" readonly="readonly"></td>
				</tr>
				<tr>
					<td class="label" width="206">UF:</td>
					<td class="input"><input name="uf" type="text" id="uf" size="5" readonly="readonly"></td>
				</tr>
            </table>
			<br />
<!-- Final da Área Contorno -->


		
<!-- Área Contato -->	

        <legend>Dados de Contato</strong></legend>
        <br>
 
            <table width="95%"  border="0" align="center">
              <tr>
                <td class="label" >Telefone Residencial *</td>
                <td class="input"><input name="telfixo" type="text"  id="telfixo" size="12" maxlength="15"></td>
              </tr>
              <tr>
                <td class="label" >Telefone Celular *</td>
                <td class="input"><input name="telcel" type="text" id="telcel" size="12" maxlength="15"></td>
              </tr>
            </table>
			<br />
<!-- Final da Área Contato -->



<!-- Área Objetivos -->
            
<legend>Objetivos</legend>
<br>
	<table width="95%"  border="0" align="center">
		<tr>
			<td class="label" >Objetivo *</td>
			<td class="input"><input name="objetivo" cols="30" rows="3" id="objetivo"></input></td>
		</tr>
		<tr>
			<td class="label" >Pretens&atilde;o</td>
			<td class="input"><input name="salario" type="text" id="salario"/></td>
		</tr>
	</table>
	<br />
<!-- Final da Área Objetivo -->



<!-- Área Habilidades -->
<legend>Habilidades</legend>
<br>
	<table width="95%"  border="0" align="center">
		<tr>
			<td class="label">Habilidades *<br />
				<span class="style1">Informe habilidades em informática, idiomas, etc.</span>
			</td>
			<td class="input"><textarea name="habilidades" cols="30" rows="4" id="habilidades"></textarea>
			</td>
		</tr>
	</table>
<br />
<!-- Final Área Habilidades -->



<!-- Área Mini Currículo -->
<legend>Minicurr&iacute;culo </legend>
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
				<textarea name="minicv" cols="30" rows="6" id="minicv"></textarea>
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
			<td class="input"><textarea name="outrasinfos" cols="30"  id="outrasinfos"></textarea>
			</td>
		</tr>
</table>
<br />
<!-- Final Área Outras Informações -->



<!-- Área Formação 1 -->
<br>
<legend>Forma&ccedil;&atilde;o n. 1 </legend>
<br />
<span class=explainred><B>Aten&ccedil;&atilde;o:</B> Inclua suas forma&ccedil;&otilde;es a partir da mais recente e at&eacute; a mais antiga.
<br />
<br />
</span>
<table width="95%"  border="0" align="center">
              <tr>
                <td class="label">Forma&ccedil;&atilde;o *</td>
                <td class="input">
                  <SELECT name="formacao1" id="formacao1">
                    <option> </option>
					<option value="Ensino Fundamental">Ensino Fundamental</option>
                    <option value="Ensino Médio">Ensino M&eacute;dio</option>
                    <option value="Graduação">Gradua&ccedil;&atilde;o</option>
                    <option value="Pós-Graduação">P&oacute;s-Gradua&ccedil;&atilde;o</option>
                    <option value="MBA">MBA</option>
                    <option value="Mestrado">Mestrado</option>
                    <option value="Doutorado">Doutorado</option>
                    <option value="Pós-Doutorado">P&oacute;s Doutorado</option>
                    <option value="Livre Docência">Livre Doc&ecirc;ncia</option>
                    <option value="Técnico">T&eacute;cnico</option>
                  </SELECT>
			</td>
			</tr>
			<tr>
                <td class="label">Curso *</td>
                <td class="input"><input name="curso1" type="text"  id="Curso" size="30"></td>
              </tr>
              <tr>
                <td class="label">In&iacute;cio *</td>
                <td class="input"><input name="inicio1" type="text" id="inicio1" size="8" maxlength="8"><span class="aviso1">Somente o ano</span></td></td><td>
				</tr>
				<tr>
				<td class="label">T&eacute;rmino</span></td>
                <td class="input"><input name="termino1" type="text" id="termino1" size="8" maxlength="8"><span class="aviso1">Somente o ano</span></td></td>
            </tr>
            <tr>
                <td class="label">Institui&ccedil;&atilde;o *</td>
                <td class="input"><input name="instituicao1" type="text" id="instituicao1" size="40"></td>
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
			<td class="input"><SPAN class=explain>
				<SELECT name="formacao2" id="formacao2">
                    <option> </option>
					<option value="Ensino Fundamental">Ensino Fundamental</option>
					<option value="Ensino Médio">Ensino M&eacute;dio</option>
                    <option value="Graduação">Gradua&ccedil;&atilde;o</option>
                    <option value="Pós-Graduação">P&oacute;s-Gradua&ccedil;&atilde;o</option>
                    <option value="MBA">MBA</option>
                    <option value="Mestrado">Mestrado</option>
                    <option value="Doutorado">Doutorado</option>
                    <option value="Pós Doutorado">P&oacute;s Doutorado</option>
                    <option value="Livre Docência">Livre Doc&ecirc;ncia</option>
                    <option value="Técnico">T&eacute;cnico</option>
                </SELECT>
                </SPAN></td>
		</tr>
		<tr>
            <td class="label"><span class=explain>Curso </span></td>
            <td class="input"><input name="curso2" type="text" id="curso2" size="30"></td>
        </tr>
		<tr>
            <td class="label"><span class=explain>In&iacute;cio</span></td>
            <td class="input"><input name="inicio2" type="text" class="bgform" id="inicio2" size="8" maxlength="8"><span class="aviso1">Somente o ano</span></td></td>
		</tr>
		<tr>
            <td class="label"><span class=explain>T&eacute;rmino</span></td>
            <td class="input"><input name="termino2" type="text" id="termino2" size="8" maxlength="8"><span class="aviso1">Somente o ano</span></td></td>
        </tr>
            <td class="label"><span class=explain>Institui&ccedil;&atilde;o </span></td>
            <td class="input"><input name="instituicao2" type="text" id="instituicao2" size="40"></td>
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
            <td class="label">Entrada *</td>
            <td class="input"><input name="entrada1" type="text" id="entrada1" size="10" maxlength="20"><span class="aviso1">Mês e ano</span></td></td>
        </tr>
		<tr>
            <td class="label">Saída</td>
            <td class="input"><input name="saida1" type="text" id="saida1" size="10" maxlength="20"><span class="aviso1">Mês e ano</span></td></td>
        </tr>
        <tr>
            <td class="label">Nome da empresa *</td>
            <td class="input"><input name="empresa1" type="text"id="empresa1" size="35"></td>
        </tr>
        <tr>
            <td class="label">&Uacute;ltimo Cargo *</td>
            <td class="input"><input name="cargo1" type="text"  id="cargo1" size="30"></td>
        </tr>
        <tr>
            <td class="label">Atribui&ccedil;&otilde;es / Realiza&ccedil;&otilde;es no cargo *</td>
            <td class="input"><textarea name="atribuicoes1" cols="30" rows="3" id="atribuicoes1"></textarea></td>
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
            <td class="input"><input name="entrada2" type="text" id="entrada2" size="10" maxlength="20"><span class="aviso1">Mês e ano</span></td></td>
        </tr>
		<tr>
            <td class="label">Saída</td>
            <td class="input"><input name="saida2" type="text" id="saida2" size="10" maxlength="20"><span class="aviso1">Mês e ano</span></td></td>
        </tr>
        <tr>
            <td class="label">Nome da empresa</td>
            <td class="input"><input name="empresa2" type="text" id="empresa2" size="35"></td>
        </tr>
        <tr>
            <td class="label">&Uacute;ltimo Cargo</td>
            <td class="input"><input name="cargo2" type="text" id="cargo2" size="30"></td>
        </tr>
        <tr>
            <td class="label">Atribui&ccedil;&otilde;es / Realiza&ccedil;&otilde;es no cargo</td>
            <td class="input"><textarea name="atribuicoes2" cols="30" rows="3" id="atribuicoes2"></textarea></td>
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
            <td class="input"><input name="entrada3" type="text" id="entrada3" size="10" maxlength="20"><span class="aviso1">Mês e ano</span></td></td>
        </tr>
		<tr>
            <td class="label">Saída</td>
            <td class="input"><input name="saida3" type="text" id="saida3" size="10" maxlength="20"><span class="aviso1">Mês e ano</span></td></td>
        </tr>
        <tr>
            <td class="label">Nome da empresa</td>
            <td class="input"><input name="empresa3" type="text" id="empresa3" size="35"></td>
        </tr>
        <tr>
            <td class="label">&Uacute;ltimo Cargo</td>
            <td class="input"><input name="cargo3" type="text"  id="cargo3" size="30"></td>
        </tr>
        <tr>
            <td class="label">Atribui&ccedil;&otilde;es / Realiza&ccedil;&otilde;es no cargo</td>
            <td class="input"><textarea name="atribuicoes3" cols="30" rows="3" id="atribuicoes3"></textarea></td>
        </tr>
    </table>
<br />


<!-- Final Área Experiência 3 -->

<tr>
	<td>
		<p align="center">
            <button name="Enviar" type="submit" id="Enviar" onClick="return validar()">Gravar</button>
            <button type="reset" name="Reset" value="Cancelar">Limpar</button>
		</p>
      </form>
	</td>
</tr>
</table>
<?php } ?>
</body>
</html>
<script>
		jQuery(function($){
		       $("#anonasc").mask("99/99/9999");
			   $("#telfixo").mask("(99) 9999-9999");
			   $("#telcel").mask("(99) 99999-9999");
			   $("#inicio1").mask("9999");
			   $("#termino1").mask("9999");
			   $("#inicio2").mask("9999");
			   $("#termino2").mask("9999");
			   $("#entrada1").mask("99/9999");
			   $("#saida1").mask("99/9999");
			   $("#entrada2").mask("99/9999");
			   $("#saida2").mask("99/9999");
			   $("#entrada3").mask("99/9999");
			   $("#saida3").mask("99/9999");
			   $("#salario").mask("R$ 999999,99");
		});
</script>
