<?php

include "../config.php";
include "../valida_user.inc";

$codigo = $_POST['codigo'];

		$query = "SELECT * FROM vaga_candidato WHERE cod_candidato = '".$usuario."' and status = '1'";
		$exec  = mysql_query($query);
		$regs  = mysql_num_rows($exec);
		
		if ( $regs > 0 ) {
		
				?>
					<script language="JavaScript">
					<!--
					alert("Oops! Você não pode excluir este currículo, pois está participando de um ou mais processos de seleção.");
					window.location = 'lista.php';
					//-->
					</script>
				<?php
				
			} Else {

						$query2 = 'UPDATE  curriculo SET D_E_L_E_T_E_ =  "*" WHERE  usuario = "'.$usuario.'"';
						if (!mysql_query ($query2))
	
							?>
								<script language="JavaScript">
								<!--
								alert("Currículo excluído com sucesso!");
								window.location = 'curriculo.php';
								//-->
								</script>
							<?php
			
		}

?>