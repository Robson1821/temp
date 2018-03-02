<?php

include "valida_user.inc";
include "config.php";
include "../php/phpmailer/class.phpmailer.php";

if( isset( $_POST['enviar'] ) ) {

		$mensagem = $_POST['problemas'];

		$msg		  = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
						<html class='no-js' lang='pt-BR'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<style type='text/css'>.corpo {	font-family: Arial, Helvetica, sans-serif;	font-size: 16px;	font-weight: normal;
						color: #fff;}.destaque {	font-family: Arial, Helvetica, sans-serif;	font-size: 18px;	color: #fff;	font-weight:bold;}
						.corpo2 {	font-family:Arial, Helvetica, sans-serif;	font-size:12px;	color: #fff;}a, a:link, a:visited{	font-family: Arial, Helvetica, sans-serif;
						text-decoration:underline;	color:#fff;}p{ margin:0; padding:0;}</style></head><body bgcolor='#FFFFFF' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
						<table width='600' border='0' align='center' cellpadding='0' cellspacing='0' class='borda'> <tr>
						<td height='30' align='center' class='corpo'><table width='600' border='0' cellspacing='0' cellpadding='0'>
						<tr><td height='340' align='center' valign='middle'><img src='http://maiorino.hospedagemdesites.ws/2013/imagens/Logo-maiorino.png' width='282' height='220' /></td>
						</tr><tr><td height='10'></td></tr><tr><td bgcolor='#f78f1e'><table width='600' border='0' cellspacing='0' cellpadding='0'>
						<tr><td width='45' rowspan='4'></td><td width='510' height='45' align='left' valign='top'></td>
						<td width='45' rowspan='4'></td></tr><tr><td width='510' height='55' align='left' valign='top'></td>
						</tr><tr><td width='510' align='left' valign='top'><p class='corpo'>O usu�rio <span class='destaque'>'$usuario'</span><span class='corpo'> relatou um erro no site:</span><br /><br />
						$mensagem </tr><tr><td width='510' height='45' align='left' valign='top'></td></tr></table></td></tr><tr><td height='10'></td>
						</tr><tr><td bgcolor='#a2b018'><table width='600' border='0' cellspacing='0' cellpadding='0'><tr><td width='45' rowspan='3'></td>
						<td width='510' height='45' align='left' valign='top'></td><td width='45' rowspan='3'></td></tr><tr>
						<td width='510' align='left' valign='top'><table width='510' border='0' cellspacing='0' cellpadding='0'>
						<tr align='left' valign='middle'><td width='416' valign='top' class='corpo2'><table width='416' border='0' cellspacing='0' cellpadding='0'>
						<tr><td class='corpo2'><p class='corpo2'>Mensagem enviada pelo portal Web | ��rea de candidatos <strong>suporte@maiorino.com.br</strong></a>.</p></td>
						</tr><tr><td height='20' align='left' valign='bottom'><img src='http://maiorino.hospedagemdesites.ws/2013/imagens/tel.png' width='124' height='13' /></td>
						</tr></table></td><td width='20'></td><td width='32'><a href='http://www.facebook.com.br/AgenciaMaiorino'><img src='http://maiorino.hospedagemdesites.ws/2013/imagens/facebook_32.png' width='32' height='32' /></a></td>
						<td width='10'></td><td width='32'><a href='http://www.twitter.com/agenciamaiorino'><img src='http://maiorino.hospedagemdesites.ws/2013/imagens/twitter_32.png' width='32' height='32' /></a></td>
						</tr></table></td></tr><tr><td width='510' height='45' align='left' valign='top'></td></tr></table></td></tr></table></td></tr></table>
						</body></html>";
		
        $mensagem 	  = $msg; 
		$email		  = 'bia@maiorino.com.br';

        // enviar o email
		//Nova instância do PHPMailer  
		$mail = new PHPMailer;  
  
		//Informa que será utilizado o SMTP para envio do e-mail  
		$mail->IsSMTP();  
  
		//Informa que a conexão com o SMTP será autênticado  
		$mail->SMTPAuth   = true;  
  
		//Configura a segurança para SSL  
		//$mail->SMTPSecure = "ssl";  
  
		//Informa a porta de conexão do GAMIL  
		$mail->Port       = 587;  
  
		//Informa o HOST do GMAIL  
		$mail->Host       = "smtp.terra.com.br";      // sets GMAIL as the SMTP server  
  
		//Usuário para autênticação do SMTP  
		$mail->Username =   "bia@maiorino.com.br";  
  
		//Senha para autênticação do SMTP  
		$mail->Password =   "kimo340";  
  
		//Titulo do e-mail que será enviado  
		$mail->Subject  =   "Erro | Mensagem do usu�rio Web";  
  
		//Preenchimento do campo FROM do e-mail  
		$mail->From = $mail->Username;  
		$mail->FromName = "Maiorino Comunica��o";  
  
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
                alert("Sua mensagem foi enviada com sucesso. Obrigado!");
				location.href="entrada.php";
                //-->
                </script>
            <?php
				}

} 
?>