<?php

include "../config.php";
include "../valida_user.inc";

/** Declaração das variáveis **/

$senha = $_POST['senha'];
$email = $_POST['email'];

/** Fim da Declaração da variáveis **/

/** Inicio da Gravação do dados **/

			$sql1 = "UPDATE candidatos SET email = '$email'
			, senha = '$senha'
			WHERE usuario = '$usuario'";
			if (!mysql_query ($sql1))

			?>
                <script language="JavaScript">
                <!--
                alert("Currículo atualizado com sucesso!");
				window.location = 'lista.php';
                //-->
                </script>
            <?php


?>