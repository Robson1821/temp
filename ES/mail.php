<?php

	$nome		= utf8_decode( $_POST["nome"] );
	$empresa	= utf8_decode( $_POST["empresa"] );
	$telefone	= utf8_decode( $_POST["telefone"] );
	$email		= utf8_decode( $_POST["email"] );
	$mensagem	= utf8_decode( $_POST["mensagem"] );

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require_once("php/PHPmailer-master/class.phpmailer.php");

	//validação do nome
	if($nome == ''){
		$validate = false;
		array_push($msg,' O campo Nome não foi preenchido.');
	}
	
	//validação do nome
	if($empresa == ''){
		$validate = false;
		array_push($msg,' O campo Nome não foi preenchido.');
	}

	//validação do telefone
	elseif(strlen($phones) < 11 && !preg_match('/^(\(?[0-9]{2}\)?|[-. ]?)[ ][0-9]{4}[-. ]?[0-9]{4}$/', $telefone)){
		$validate = false;
		//array_push($msg,' Preencha o campo Telefone da seguinte forma (11) 1111-1111.');
	}

	//validação do email
	elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)){
		$validate = false;
		array_push($msg,' Seu E-mail está incorreto.');
	}
	
	//validação da mensagem
	elseif($mensagem == '' ||  strlen($mensagem) < 20){
		$validate = false;
		array_push($msg,' O campo Mensagem deve conter mais caracteres.');
	}

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.maiorino.com.br"; // Endereço do servidor SMTP
//$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
//$mail->Username = 'seumail@dominio.net'; // Usuário do servidor SMTP
//$mail->Password = 'senha'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "$email"; // Seu e-mail
$mail->FromName = "$nome"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('mari@maiorino.com.br', 'Mari Evangelista');
//$mail->AddAddress('ciclano@site.net');
$mail->AddCC('cristina@maiorino.com.br', 'Cristina Petronieri'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Contato pelo site"; // Assunto da mensagem
$mail->Body .= "De: " .$nome. '<br />'; 
$mail->Body .= "Empresa: " .$empresa. '<br />';
$mail->Body .= "Telefone: " .$telefone. '<br />';
$mail->Body .= "E-mail: " .$email. '<br />';
$mail->Body .= "Mensagem: ".$mensagem. '<br />';

//$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";

// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
if ($enviado) {
  echo "E-mail enviado com sucesso!";
} else {
  echo "Não foi possível enviar o e-mail.";
  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}

header('Location: http://www.maiorino.com.br/clientes/maiorino');
exit;

?>