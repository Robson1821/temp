<?php

include "../config.php";
include "../valida_user.inc";

/** Declaração das variáveis **/

$codigo = $_GET['cod'];

/** Fim da Declaração da variáveis **/

/** Inicio da Gravação do dados **/

			$sql1 = "UPDATE vagas SET D_E_L_E_T_E_ = '*'
			WHERE cod = '$codigo'";
			if (!mysql_query ($sql1))

			?>
                <script language="JavaScript">
                <!--
                alert("Vaga foi excluida com sucesso!");
				window.location = 'lista.php';
                //-->
                </script>
            <?php


?>




























?>