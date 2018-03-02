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
					alert("Oops! Você não pode excluir sua conta, pois está participando de um ou mais processos de seleção.");
					window.location = 'lista.php';
					//-->
					</script>
				<?php
				
			} Else {

						$query2 = 'UPDATE  candidatos SET D_E_L_E_T_E_ =  "*" WHERE  usuario = "'.$usuario.'"';
						if (!mysql_query ($query2))
	
							?>
								<script language="JavaScript">
								<!--
								alert("Usuário excluído com sucesso!");
								parent.location = 'http://localhost/maiorino/rh/php/logout.php';
								//-->
								</script>
							<?php
			
		}

?>