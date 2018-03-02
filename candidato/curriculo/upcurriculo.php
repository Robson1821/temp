<?php

include "../config.php";
include "../valida_user.inc";

/** Declaração das variáveis **/

$nome 			= $_POST['nome']; 			$telcel			= $_POST['telcel']; 		$instituicao2	= $_POST['instituicao2'];
$email			= $_POST['email']; 			$objetivo		= $_POST['objetivo']; 		$entrada1		= $_POST['entrada1'];
$sexo			= $_POST['sexo']; 			$salario		= $_POST['salario'];		$saida1			= $_POST['saida1'];
$estadocivil	= $_POST['estadocivil']; 	$empresa1		= $_POST['empresa1'];       $anonasc		= $_POST['anonasc']; 		
$habilidades	= $_POST['habilidades']; 	$cargo1			= $_POST['cargo1'];			$empregado		= $_POST['empregado']; 		
$minicv			= $_POST['minicv']; 		$atribuicoes1	= $_POST['atribuicoes1'];	$nacionalidade	= $_POST['nacionalidade']; 	
$outrasinfos	= $_POST['outrasinfos']; 	$entrada2		= $_POST['entrada2'];		$naturalidade	= $_POST['naturalidade']; 	
$formacao1		= $_POST['formacao1']; 		$saida2			= $_POST['saida2'];			$cep			= $_POST['cep']; 			
$inicio1		= $_POST['inicio1']; 		$empresa2		= $_POST['empresa2'];
$logradouro		= $_POST['logradouro']; 	$termino1		= $_POST['termino1']; 		$cargo2			= $_POST['cargo2'];
$numero			= $_POST['numero']; 		$curso1			= $_POST['curso1']; 		$atribuicoes2	= $_POST['atribuicoes2'];
$bairro			= $_POST['bairro']; 		$instituicao1	= $_POST['instituicao1']; 	$entrada3		= $_POST['entrada3'];
$cidade			= $_POST['cidade']; 		$formacao2		= $_POST['formacao2']; 		$saida3			= $_POST['saida3'];
$uf				= $_POST['uf']; 			$curso2			= $_POST['curso2']; 		$empresa3		= $_POST['empresa3'];
$telfixo		= $_POST['telfixo']; 		$inicio2		= $_POST['inicio2']; 		$cargo3			= $_POST['cargo3'];
$termino2		= $_POST['termino2']; 		$atribuicoes3	= $_POST['atribuicoes3'];

/** Fim da Declaração da variáveis **/

/** Inicio da Gravação do dados **/

			$sql1 = "UPDATE curriculo SET est_civil = '$estadocivil'
			, emp_atual = '$empregado'
			, cep  = '$cep'
			, logradouro = '$logradouro'
			, numero = '$numero'
			, bairro = '$bairro'
			, cidade = '$cidade'
			, UF = '$uf'
			, tel_fixo = '$telfixo'
			, tel_cel = '$telcel'
			, objetivo = '$objetivo'
			, pretensao = '$salario'
			, habilidade = '$habilidades'
			, minicv = '$minicv'
			, outras_infos = '$outrasinfos'
			, formacao1 = '$formacao1'
			, curso1 = '$curso1'
			, inicio1 = '$inicio1'
			, termino1 = '$termino1'
			, instituicao1 = '$instituicao1'
			, formacao2 = '$formacao2'
			, curso2 = '$curso2'
			, inicio2 = '$inicio2'
			, termino2 = '$termino2'
			, instituicao2 = '$instituicao2'
			, entrada1 = '$entrada1'
			, saida1 = '$saida1'
			, empresa1 = '$empresa1'
			, cargo1 = '$cargo1'
			, atribuicoes1 = '$atribuicoes1'
			, entrada2 = '$entrada2'
			, saida2 = '$saida2'
			, empresa2 = '$empresa2'
			, cargo2 = '$cargo2'
			, atribuicoes2 = '$atribuicoes2'
			, entrada3 = '$entrada3'
			, saida3 = '$saida3'
			, empresa3 = '$empresa3'
			, cargo3 = '$cargo3'
			, atribuicoes3 = '$atribuicoes3'
			WHERE usuario = '".$usuario."'
			AND D_E_L_E_T_E_ = ''";
			if (!mysql_query ($sql1))

			?>
                <script language="JavaScript">
                <!--
                alert("Curriculo atualizado com sucesso!");
				window.location = 'lista.php';
                //-->
                </script>
            <?php


?>