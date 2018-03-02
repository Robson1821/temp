<?php

include "../config.php";
include "../valida_user.inc";

$vaga = $_GET['cod'];

$query1 = "SELECT * FROM curriculo WHERE usuario = '".$usuario."' and D_E_L_E_T_E_ = ''";
	$exec1  = mysql_query($query1);
	$regs1  = mysql_num_rows($exec1);
	$row1   = mysql_fetch_array ($exec1);
	
	if ($regs1 == 0) {
	
			?>
            <script language="JavaScript">
            <!--
            alert("Você não pode se candidatar para esta vaga, sem antes cadastrar um currículo!");
			window.location = 'lista.php';
            //-->
            </script>
        <?php
	
	} else {

$query = "SELECT * FROM vaga_candidato WHERE cod_vaga = '".$vaga."' and cod_candidato = '".$usuario."'";
	$exec  = mysql_query($query);
	$regs  = mysql_num_rows($exec);
	$row   = mysql_fetch_array ($exec);
	
	if ($regs > 0) {
		
		?>
            <script language="JavaScript">
            <!--
            alert("Você ja se candidatou para esta vaga! Aguarde nosso contato.");
			window.location = 'lista.php';
            //-->
            </script>
        <?php
	
	} else {

			$sql = "INSERT INTO vaga_candidato (cod_vaga,cod_candidato, d_cadastro, h_cadastro, status) 
			VALUES ('$vaga', '$usuario', current_date, current_time, '')";
			mysql_query($sql);
			
			?>
                <script language="JavaScript">
                <!--
                alert("Sua solicitação foi efetuada com sucesso! Aguarde nosso contato.");
				window.location = 'lista.php';
                //-->
                </script>
            <?php
		}
	}
?>