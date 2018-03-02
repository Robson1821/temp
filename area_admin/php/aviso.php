<?php
$id=$_REQUEST['id'];

	switch($id)
	{
		case 1:
			$mens = "Não foi localizado a autenticação de acesso.";
			$nomedaopcao = "efetuar login.";
			$caminho = "index.php";
			break;
		case 2:
			$mens = "Usuário e/ou senha não localizados na base de dados.";
			$nomedaopcao = "Voltar para página de login.";
			$caminho = "index.php";
			break;
		case 3:
			$mens = "Usuário não está ativo no sistema. Por favor verifique o e-mail de ativação de conta!";
			$nomedaopcao = "Voltar para página de login";
			$caminho = "index.php";
			break;
	}
?>
<html>
<head>

<title>Área Restrita | Maiorino Comunicação</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Maiorino Comunicação" lang="pt-BR">
<meta name="copyright" content="Maiorino Comunica褯 - Todos os Direitos Reservados">
<meta name="robots" content="index,follow">

<link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
<link href="../css/style.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="../js/modernizr.js"></script>
<script src="../js/cufon-yui.js" type="text/javascript"></script>
<script src="../js/Dekar_400.js" type="text/javascript"></script>
<script type="text/javascript">
	Cufon.replace('#nav, .dekar', { fontFamily: 'Dekar', hover: true});
</script>

</head>
<body>
<div id="wrap">
	<div id="main">
	
    <div id="top"></div>
    <!--header-->
    <div id="header">

	<h1 class="logoAdmin"><a href="home.html"><img src="../imagens/Logo-Maiorino-Comunicacao.png" alt="Maiorino Comunicação" width="310" height="60" title="Maiorino Comunicação"></a></h1>
	</center>
    </div>

    <!--content-->
	<div id="content" class="main">

		<!--Acesso-->
		<div id="login" class="gridAdmin">
		<div class="inner">
			<h3 class="dekar">Área Administrativa</h3>
			<br />
			<br />
            <h3 class="dekar">Oops!!!</h3>
            <p><?php echo $mens; ?></p>
		</div>
		</div>
        
		
	</div id="content">
	</div id="main">
</div id="wrap">
	
    <!--footer-->
    <div id="footer"></div>

</body>
</html>