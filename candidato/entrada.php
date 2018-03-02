<?php

//----------------------------------------------------------------------------------------------------------------------
//
//Funo	: Menu de entrada da area de administrativa
//Analista	: Beatriz D. Ferreira
//Data		: 30/10/2012
//Cliente	: Maiorino Comunicao
//
//----------------------------------------------------------------------------------------------------------------------
//session_start();

//exit;
include "valida_user.inc";
include "config.php";
/*echo '<pre>teste';
  print_r($_SESSION);
echo '</pre>';*/


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="no-js" lang="pt-BR">
<head>

<title>Trabalhe Conosco | Maiorino Comunicação</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/Dekar_400.js" type="text/javascript"></script>
<script type="text/javascript">
	Cufon.replace('#nav1, .dekar', { fontFamily: 'Dekar', hover: true});
</script>

<script type="text/javascript">
			$(document).ready(function(){
				$("a[rel=modal]").click( function(ev){
					ev.preventDefault();

					var id = $(this).attr("href");

					var alturaTela = $(document).height();
					var larguraTela = $(window).width();
	
					//colocando o fundo preto
					$('#mascara').css({'width':larguraTela,'height':alturaTela});
					$('#mascara').fadeIn(1000);	
					$('#mascara').fadeTo("slow",0.9);

					var left = ($(window).width() /2) - ( $(id).width() / 2 );
					var top = ($(window).height() /2) - ( $(id).height() / 2 );
					
					$(id).css({'top':top,'left':left});
					$(id).show();	
 				});

 				$("#mascara").click( function(){
 					$(this).hide();
 					$(".window").hide();
 				});

 				$('.fechar').click(function(ev){
 					ev.preventDefault();
 					$("#mascara").hide();
 					$(".window").hide();
 				});
			});
		</script>
<style>
.aviso{
	color: #fff;
	font-size: 12px;
}
.aviso a{
	color: #fff;
}
.aviso a:hover{
	text-decoration:underline;
}
.img1 {
	clear: right;
	float: left;
	vertical-align: -60%
}
.window{
	display:none;
	width:365px;
	height:300px;
	position:absolute;
	left:0;
	top:0;
	background:#5C2E91;
	z-index:9900;
	padding:10px;
	border-radius:10px;
	color: #fff;
}
#mascara{
	position:absolute;
	left:0;
	top:0;
	z-index:9000;
	background-color:#000;
	display:none;
}
.fechar{
	display:block; 
	text-align:right;
}
</style>
</head>

<body>

<div id="wrap">
	<div id="main">
		<div id="top"></div>

		<div id="header">
			<div class="main">
 				<h1 class="logo"><a href="http://www.maiorino.com.br/clientes/maiorino/candidato/entrada.php"><img title="Maiorino Comunicação" alt="Maiorino Comunicação" src="img/Logo-Maiorino-Comunicacao.png"></a></h1>
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
                        <a class="about" href="vagas/lista.php" target="frame">
                            <span class="ca-icon">L</span>
                            <div class="ca-content">
                                <p class="ca-main">Visualizar Vagas</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="services" href="curriculo/curriculo.php" target="frame">
                            <span class="ca-icon">a</span>
                            <div class="ca-content">
                                <p class="ca-main">Currículo</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="portfolio" href="curriculo/lista.php" target="frame">
                            <span class="ca-icon-img"></span>
                            <div class="ca-content">
                                <p class="ca-main">Alterar Currículo</p>
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
			
            
            <div id="innerProblem">
            	<img class="img1" src="http://www.maiorino.com.br/2013/imagens/iconeAlerta.png" width="12px" height="12px" /> <span class="aviso"><a href="#janela1" rel="modal">&nbsp;Relatar problemas no site</a></span>

				<div class="window" id="janela1">
					<a href="#" class="fechar"><img src="../imagens/icone_fechar.png" /></a>
						<span class="dekar"><font size="6"> Xiii...</font></span><br /><br />
						<font size="2"><span>Pelo visto você encontrou algum erro ou problema em nosso site! :-( <br />
						Nos diga o que está acontecendo, para que possamos realizar as correções ;-) </span></font>
						<br />
						<br />
						<form name="registrar" action="problema.php" method="post">
						<textarea name="problemas" id="problemas" rows="4" cols="100" ></textarea>
						<br />
						<button type="submit" name="enviar" id="enviar" class="dekar">Enviar</button>
						</form>
				</div>
				<!-- mascara para cobrir o site -->	
				<div id="mascara"></div>
            </div>
            
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
				<p><a href="" class="privacy" onClick="return popUp()" title="Política de Privacidade">Política de Privacidade</a></p>
            </div>
    </div>
</div id="footer">
</body>
</html>