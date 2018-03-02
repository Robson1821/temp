<?php
include "../config.php";
include "../valida_user.inc";


if( isset( $_POST['enviar'] ) ) {

	$cod	 = $_POST['codigo'];
	$titulo	 = $_POST['titulo'];
	$desc	 = $_POST['desc'];
	$benef	 = $_POST['benef'];
	$salario = $_POST['salario'];
	
	$sql1 = "UPDATE `maiorino`.`vagas` SET `titulo` = '".$titulo."', `desc` = '".$desc."', `benef` = '".$benef."', `salario` = '".$salario."' 
			 WHERE `vagas`.`cod` = '".$cod."'";
			if (!mysql_query ($sql1))

			?>
                <script language="JavaScript">
                <!--
                alert("Vaga foi alterada com sucesso!");
				window.location = 'lista.php';
                //-->
                </script>
            <?php

} 
?>