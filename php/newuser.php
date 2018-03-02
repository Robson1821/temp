<?php 
/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/	
include "./PHPMailer/class.phpmailer.php";
include "config.php";

if( $_POST["cad-senha"] == $_POST['cad-confsenha']) {

	$nome	 = utf8_decode($_POST["cad-nome"]);
	$usuario = utf8_decode($_POST["cad-user"]);
	$cpf	 = $_POST["cad-cpf"];
	$email	 = $_POST["cad-email"];
	$senha	 = $_POST["cad-senha"];
	$status	 = 0;
    $uid 	 = uniqid( rand( ), true );
	
	$query = "SELECT * FROM candidatos WHERE usuario = '".$usuario."'";
	$exec  = mysql_query($query);
	$regs  = mysql_num_rows($exec);
	$row   = mysql_fetch_array ($exec);
	
	if ($regs > 0) {
	
	
		?>
            <script language="JavaScript">
            <!--
            alert("Este nome de usuário já existe no sistema!");
			window.location = "http://www.maiorino.com.br";
            //-->
            </script>
        <?php
		
	}else{
	
	
	
	$query1 = "SELECT * FROM candidatos WHERE cpf = '".$cpf."'";
	$exec1  = mysql_query($query1);
	$regs1  = mysql_num_rows($exec1);
	$row1   = mysql_fetch_array ($exec1);
	
	if ($regs1 > 0) {
		
		?>
            <script language="JavaScript">
            <!--
            alert("Este CPF já existe no sistema, por favor entre com os dados corretos. Caso tenha esquecido a senha utilize o link na lateral do formuário!");
			window.location = "http://www.maiorino.com.br/clientes/maiorino/";
            //-->
            </script>
        <?php
		
	
	} else {


		$sql = "insert into candidatos (cod, nome, usuario, cpf, email, senha, status, d_cadastro, h_cadastro, random ) ";
		$sql .= "values ('', '$nome','$usuario','$cpf','$email','$senha','$status',current_date, current_time,'$uid')";

		if( ! mysql_query( $sql ) ) {
        echo "Houve um erro inserindo o registro ".mysql_error( );
		
		} else { 

        // Criar as variaveis para validar o email
        $url = "cpf=".$cpf."&uid=".$uid."";
		
		$linkconfirma = "<a href='http://www.maiorino.com.br/clientes/maiorino/php/confirma.php?$url'><strong>Clique aqui para confirmar sua incrição</strong></a>";
		$msg		  = "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<style type='text/css'>.corpo {	font-family: Arial, Helvetica, sans-serif;	font-size: 16px;	font-weight: normal;
						color: #fff;}.destaque {	font-family: Arial, Helvetica, sans-serif;	font-size: 18px;	color: #fff;	font-weight:bold;}
						.corpo2 {	font-family:Arial, Helvetica, sans-serif;	font-size:12px;	color: #fff;}a, a:link, a:visited{	font-family: Arial, Helvetica, sans-serif;
						text-decoration:underline;	color:#fff;}p{ margin:0; padding:0;}</style></head><body bgcolor='#FFFFFF' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
						<table width='600' border='0' align='center' cellpadding='0' cellspacing='0' class='borda'> <tr>
						<td height='30' align='center' class='corpo'><table width='600' border='0' cellspacing='0' cellpadding='0'>
						<tr><td height='340' align='center' valign='middle'><img src='http://maiorino.com.br/clientes/maiorino/area_admin/imagens/Logo-maiorino.png' width='282' height='220' /></td>
						</tr><tr><td height='10'></td></tr><tr><td bgcolor='#f78f1e'><table width='600' border='0' cellspacing='0' cellpadding='0'>
						<tr><td width='45' rowspan='4'></td><td width='510' height='45' align='left' valign='top'></td>
						<td width='45' rowspan='4'></td></tr><tr><td width='510' height='55' align='left' valign='top'><img src='http://maiorino.com.br/clientes/maiorino/area_admin/imagens/confirmacao.png' width='289' height='27' /></td>
						</tr><tr><td width='510' align='left' valign='top'><p class='corpo'>Prezado(a)<span class='destaque'> '$nome'</span>,<br />
						<br /></p><p class='corpo'>Sua solicitação para criação do login <span class='destaque'>'$usuario'</span><span class='corpo'> foi bem sucedida!</span><br />
						$linkconfirma </tr><tr><td width='510' height='45' align='left' valign='top'></td></tr></table></td></tr><tr><td height='10'></td>
						</tr><tr><td bgcolor='#a2b018'><table width='600' border='0' cellspacing='0' cellpadding='0'><tr><td width='45' rowspan='3'></td>
						<td width='510' height='45' align='left' valign='top'></td><td width='45' rowspan='3'></td></tr><tr>
						<td width='510' align='left' valign='top'><table width='510' border='0' cellspacing='0' cellpadding='0'>
						<tr align='left' valign='middle'><td width='416' valign='top' class='corpo2'><table width='416' border='0' cellspacing='0' cellpadding='0'>
						<tr><td class='corpo2'><p class='corpo2'>Se tiver problemas, envie um e-mail para <a href='mailto:suporte@maiorino.com.br'><strong>suporte@maiorino.com.br</strong></a>.</p></td>
						</tr><tr><td height='20' align='left' valign='bottom'><img src='http://maiorino.com.br/clientes/maiorino/area_admin/imagens/tel.png' width='124' height='13' /></td>
						</tr></table></td><td width='20'></td><td width='32'><a href='http://www.facebook.com.br/AgenciaMaiorino'><img src='http://maiorino.com.br/clientes/maiorino/area_admin/imagens/facebook_32.png' width='32' height='32' /></a></td>
						<td width='10'></td><td width='32'><a href='http://www.twitter.com/agenciamaiorino'><img src='http://maiorino.com.br/clientes/maiorino/area_admin/imagens/twitter_32.png' width='32' height='32' /></a></td>
						</tr></table></td></tr><tr><td width='510' height='45' align='left' valign='top'></td></tr></table></td></tr></table></td></tr></table>
						</body></html>";

		
        $mensagem 	  = $msg; 
        $mensagem 	 .= $linkconfirma;
		
		error_reporting ( E_ALL );

        // enviar o email
		//Nova instância do PHPMailer 
		$mail = new PHPMailer;  		
  
		//Informa que será utilizado o SMTP para envio do e-mail  
		$mail->IsSMTP();  		
  
		//Informa que a conexão com o SMTP será autênticado  
		$mail->SMTPAuth   = true;  		
  
		//Informa a porta de conexão do GAMIL  
		$mail->Port       = 587;  		
  
		//Informa o HOST do GMAIL  
		$mail->Host       = "smtp.maiorino.com.br";     // sets GMAIL as the SMTP server  
  
		//Usuário para autênticação do SMTP  
		$mail->Username =   "suporte@maiorino.com.br";  
  
		//Senha para autênticação do SMTP  
		$mail->Password =   "1234abc@"; 
  
		//Titulo do e-mail que será enviado  
		$mail->Subject  =   "Confirmação de Cadastro"; 
  
		//Preenchimento do campo FROM do e-mail  
		$mail->From = $mail->Username;  
		$mail->FromName = "Maiorino Comunicação";  	
  
		//E-mail para a qual o e-mail será enviado  
		$mail->AddAddress($email);	

		//Conteúdo do e-mail  
		$mail->Body = $msg;  
		$mail->AltBody = $mail->Body;  	
  
		//Checamos se a mensagem foi enviada ou se teve algum erro...
		if(!$mail->Send()) {
		echo "Erro: " . $mail->ErrorInfo;	
		}
		else {
	
			?>
                <script language="JavaScript">
                <!--
                alert("Sua solicitação foi efetuada com sucesso! Aguarde o e-mail de confirmação.");
				window.location = "http://www.maiorino.com.br/clientes/maiorino/";
                //-->
                </script>
            <?php
				}
			}
		}
	}
}else{
	?>
            <script language="JavaScript">
            <!--
            alert("A senha não é igual a confirmação, digite novamente");
			window.location = "http://www.maiorino.com.br/clientes/maiorino/";
            //-->
            </script>
        <?php
	
}
?>