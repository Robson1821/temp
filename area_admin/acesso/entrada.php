<?php

//----------------------------------------------------------------------------------------------------------------------
//
//Funo	: Menu de entrada da area de administrativa
//Analista	: Beatriz D. Ferreira
//Data		: 30/10/2012
//Cliente	: Maiorino Comunicao
//
//----------------------------------------------------------------------------------------------------------------------
session_start();
include 'valida_user.inc';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="no-js" lang="pt-BR">
<head>

<title>Área Restrita | Maiorino Comunicação</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
<link href="css/style.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/Dekar_400.js" type="text/javascript"></script>
<script type="text/javascript">
	Cufon.replace('#nav1, .dekar', { fontFamily: 'Dekar', hover: true});
</script>

<script language="JavaScript">
function problema()
{
window.open("problema.php", "", "top=200, left=450, width=535, height=265" );
}
</script>

</head>

<body>

<div id="wrap">
	<div id="main">
		<div id="top"></div>

		<div id="header">
			<div class="main">
 				<h1 class="logo"><a href="home.html"><img title="Maiorino Comunicação" alt="Maiorino Comunicação" src="img/Logo-Maiorino-Comunicacao.png"></a></h1>
				<!--navigation-->
				<div id="nav">
				Bem vindo(a) <b><?php echo "$nome" ?></b> | <b><a href="../php/logout.php">Sair</a></b>
				</div>
			</div>
		</div>

	<div id="content" class="main">

<!-- Menu -->
	   
		<div id="cadcandidato" class="grid1">
       	
		<div class="inner">
        	<div id="innerMenu">
            	<ul class="ca-menu">		
                    <li>
                        <a class="home" href="inicial.php" target="frame">
                            <span class="ca-icon">X</span>
                            <div class="ca-content">
                                <p class="ca-main">Início</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="about" href="vagas/cadastrarvaga.php" target="frame" >
                            <span class="ca-icon-img"></span>
                            <div class="ca-content">
                                <p class="ca-main">Cadastrar Vagas</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="services" href="vagas/lista.php" target="frame">
                            <span class="ca-icon">F</span>
                            <div class="ca-content">
                                <p class="ca-main">Vagas</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="portfolio" href="candidatos/lista.php" target="frame" >
                            <span class="ca-icon">U</span>
                            <div class="ca-content">
                                <p class="ca-main">Candidatos</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="contact" href="conta/lista.php" target="frame">
                            <span class="ca-icon">S</span>
                            <div class="ca-content">
                                <p class="ca-main">Editar Conta</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div><!-- fecha div innerMenu -->
			
            <div id="innerProblem"></div>
            
        </div><!-- Fecha div inner -->
		
        </div ="cadcandidato">  

<!-- Frame de Acesso -->

		<iframe class="grid3" src="inicial.php" scrolling="auto" marginwidth="0" marginheight="0" name="frame" frameborder="0" vspace="0" hspace="0" ></iframe>
		
	</div id="content">
	
	</div id="main">

</div id="wrap">

<!-- Footer -->
	
<div id="footer">
	<div class="main">
	
            <div id="address" class="grid1">
				<h3 class="dekar">CONTATO</h3>
				<p>Tel: (11) 4339.8287</p>
				<p>R. General Osório, 111</p>
				<p>S. Bernardo do Campo - SP</p>
				<p>CEP: 09715-380</p>
            </div>
            
            <div id="follow" class="grid1">
				<h3 class="dekar">SIGA-NOS</h3>
				<p><a href="http://www.facebook.com.br/AgenciaMaiorino" target="_blank"><img src="img/facebook_32.png" width="32" height="32" title="Facebook" alt="Curta a Maiorino no Facebook"></a></p>
				<p><a href="http://www.twitter.com/agenciamaiorino" target="_blank"><img src="img/twitter_32.png" width="32" height="32" title="Twitter" alt="Siga-nos no Twitter"></a></p>
            </div>
            
            <div id="copyright" class="grid1">
				<h3 class="dekar">COPYRIGHT</h3>
				<p>© 2012 Maiorino Comunicação</p>
				<p>Todos os Direitos Reservados</p>
				<br />
            </div>
    </div>
</div id="footer">
</body>
</html>