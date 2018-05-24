<?php
ob_start();
if( ($_SESSION['usuarioId']=="")|| ($_SESSION['usuarioNome']=="")|| ($_SESSION['usuarioNivelAcesso']=="")|| ($_SESSION['usuarioSenha']=="")||($_SESSION['usuarioSenha']=="")){
  unset(
      $_SESSION['usuarioId'],
      $_SESSION['usuarioNome'],
      $_SESSION['usuarioNivelAcesso'],
      $_SESSION['usuarioLogin'],
      $_SESSION['usuarioSenha']);

    //Mensagem de Erro
    $_SESSION['loginErro']="Area restrita, somente para usuarios cadastrados";

    //Redireciona o Usuario para tela de Login
    header("Location: ../index.php");
}


?>