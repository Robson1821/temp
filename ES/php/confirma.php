<?php

// Conectar no banco de dados
include_once('config.php');

// Dados vindos pela url
$cpf	  = $_GET['cpf'];
$uid	  = $_GET['uid'];

//Buscar os dados no banco
$sql = "select * from candidatos where cpf = $cpf";
$sql = mysql_query( $sql );
$rs = mysql_fetch_array( $sql );

// Comparar os dados que pegamos no banco, com os dados vindos pela url
$valido = true;

if( $uid !==  $rs['random'] )
    $valido = false;

	$query = "select * from candidatos where cpf = $cpf and status = '1'";
	$exec  = mysql_query($query);
	$regs  = mysql_num_rows($exec);
	$row   = mysql_fetch_array ($exec);
	
	if ($regs > 0) {
		
		?>
            <script language="JavaScript">
            <!--
            alert("Este usuario ja foi ativado!");
			window.location = 'http://www.maiorino.com.br';
            //-->
            </script>
        <?php
		
	
	} else {

// Os dados estão corretos, hora de ativar o cadastro
if( $valido === true ) {
    $sql = "update candidatos set status='1' where cpf = $cpf";
    mysql_query( $sql );
    
	?>
        <script language="JavaScript">
        <!--
        alert("Cadastro ativado com sucesso!");
		window.location = 'http://www.maiorino.com.br';
        //-->
        </script>
    <?php
	
} else {
    ?>
        <script language="JavaScript">
        <!--
        alert("Informações Inválidas!");
		window.location = 'http://www.maiorino.com.br/clientes/maiorino/';
        //-->
        </script>
    <?php
	}
}
?>