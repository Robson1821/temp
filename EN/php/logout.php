<?php
    include "valida_user.inc";
    include "config.php";

    session_start(); // Inicializa a sessão

    $_SESSION["usuario"] = "";
    $_SESSION["senha"] = "";

	header('location:http://www.maiorino.com.br');
?>

