<?php
    include "valida_user.inc";
    include "config.php";

    session_start(); // Inicializa a sess�o

    $_SESSION["usuario"] = "";
    $_SESSION["senha"] = "";

	header('location:../index.html');
?>

