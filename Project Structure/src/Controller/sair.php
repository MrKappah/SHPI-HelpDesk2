<?php
session_start();
session_destroy();

//Remove todas as informacoes contidas nas variaveis globais
unset(
    $_SESSION['usuarioId'],
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioNivelAcesso'],
    $_SESSION['usuarioLogin'],
    $_SESSION['usuarioSenha']);

//Redireciona o Usuario para tela de Login
header("Location: ../index.php");

?>