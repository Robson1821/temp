<?php 

include "./PHPMailer/class.phpmailer.php";
include "config.php";
	
		$query1 = "SELECT * FROM candidatos WHERE status = '0'";
		$exec1  = mysql_query($query1);
		
		while($dados = mysql_fetch_assoc($exec1)){
		
		$nome 	 = $dados['nome'];
		$usuario = $dados['usuario'];
		$email	 = $dados['email'];
		$senha	 = $dados['senha'];
		$cpf	 = $dados['cpf'];
		$uid	 = $dados['random'];

		$url = "cpf=".$cpf."&uid=".$uid."";
		
		$linkconfirma = "<a href='http://www.maiorino.com.br/2014/php/confirma.php?$url'><strong>Clique aqui para confirmar sua incri��o</strong></a>";
		$msg		  = "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<style type='text/css'>.corpo {	font-family: Arial, Helvetica, sans-serif;	font-size: 16px;	font-weight: normal;
						color: #fff;}.destaque {	font-family: Arial, Helvetica, sans-serif;	font-size: 18px;	color: #fff;	font-weight:bold;}
						.corpo2 {	font-family:Arial, Helvetica, sans-serif;	font-size:12px;	color: #fff;}a, a:link, a:visited{	font-family: Arial, Helvetica, sans-serif;
						text-decoration:underline;	color:#fff;}p{ margin:0; padding:0;}</style></head><body bgcolor='#FFFFFF' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
						<table width='600' border='0' align='center' cellpadding='0' cellspacing='0' class='borda'> <tr>
						<td height='30' align='center' class='corpo'><table width='600' border='0' cellspacing='0' cellpadding='0'>
						<tr><td height='340' align='center' valign='middle'><img src='http://www.maiorino.com.br/2014/imagens/Logo-maiorino.png' width='282' height='220' /></td>
						</tr><tr><td height='10'></td></tr><tr><td bgcolor='#f78f1e'><table width='600' border='0' cellspacing='0' cellpadding='0'>
						<tr><td width='45' rowspan='4'></td><td width='510' height='45' align='left' valign='top'></td>
						<td width='45' rowspan='4'></td></tr><tr><td width='510' height='55' align='left' valign='top'><img src='http://www.maiorino.com.br/2014/imagens/confirmacao.png' width='289' height='27' /></td>
						</tr><tr><td width='510' align='left' valign='top'><p class='corpo'>Prezado(a)<span class='destaque'> '$nome'</span>,<br />
						<br /></p><p class='corpo'>Sua solicita��o para cria��o do login <span class='destaque'>'$usuario'</span><span class='corpo'> foi bem sucedida!</span><br />
						$linkconfirma </p><p class='corpo'>Sua senha �: <b>$senha</b></p></tr><tr><td width='510' height='45' align='left' valign='top'></td></tr></table></td></tr><tr><td height='10'></td>
						</tr><tr><td bgcolor='#a2b018'><table width='600' border='0' cellspacing='0' cellpadding='0'><tr><td width='45' rowspan='3'></td>
						<td width='510' height='45' align='left' valign='top'></td><td width='45' rowspan='3'></td></tr><tr>
						<td width='510' align='left' valign='top'><table width='510' border='0' cellspacing='0' cellpadding='0'>
						<tr align='left' valign='middle'><td width='416' valign='top' class='corpo2'><table width='416' border='0' cellspacing='0' cellpadding='0'>
						<tr><td class='corpo2'><p class='corpo2'>Se tiver problemas, envie um e-mail para <a href='mailto:suporte@maiorino.com.br'><strong>suporte@maiorino.com.br</strong></a>.</p></td>
						</tr><tr><td height='20' align='left' valign='bottom'><img src='http://www.maiorino.com.br/2014/imagens/tel.png' width='124' height='13' /></td>
						</tr></table></td><td width='20'></td><td width='32'><a href='http://www.facebook.com.br/AgenciaMaiorino'><img src='http://www.maiorino.com.br/2014/imagens/facebook_32.png' width='32' height='32' /></a></td>
						<td width='10'></td><td width='32'><a href='http://www.twitter.com/agenciamaiorino'><img src='http://www.maiorino.com.br/2014/imagens/twitter_32.png' width='32' height='32' /></a></td>
						</tr></table></td></tr><tr><td width='510' height='45' align='left' valign='top'></td></tr></table></td></tr></table></td></tr></table>
						</body></html>";

		
        $mensagem 	  = $msg; 
        $mensagem 	 .= $linkconfirma;
		
        // enviar o email
		//Nova inst�ncia do PHPMailer 
		$mail = new PHPMailer;  		
  
		//Informa que ser� utilizado o SMTP para envio do e-mail  
		$mail->IsSMTP();  		
  
		//Informa que a conex�o com o SMTP ser� aut�nticado  
		$mail->SMTPAuth   = true;  		
  
		//Informa a porta de conex�o do GAMIL  
		$mail->Port       = 587;  		
  
		//Informa o HOST do GMAIL  
		$mail->Host       = "smtp.maiorino.com.br";     // sets GMAIL as the SMTP server  
  
		//Usu�rio para aut�ntica��o do SMTP  
		$mail->Username =   "suporte@maiorino.com.br";  
  
		//Senha para aut�ntica��o do SMTP  
		$mail->Password =   "1234abc@"; 
  
		//Titulo do e-mail que ser� enviado  
		$mail->Subject  =   "Confirma��o de Cadastro"; 
  
		//Preenchimento do campo FROM do e-mail  
		$mail->From = $mail->Username;  
		$mail->FromName = "Maiorino Comunica��o";  	
  
		//E-mail para a qual o e-mail ser� enviado  
		$mail->AddAddress($email);	

		//Conte�do do e-mail  
		$mail->Body = $msg;  
		$mail->AltBody = $mail->Body;  	
  
		//Checamos se a mensagem foi enviada ou se teve algum erro...
		if(!$mail->Send()) {
		echo "Erro: " . $mail->ErrorInfo;	
		}
	
?>
                <script language="JavaScript">
                <!--
                alert("Finalizado!");
                //-->
                </script>

<?php

}

?>
