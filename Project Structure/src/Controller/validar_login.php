<?php
session_start();
$usuario=addslashes($_REQUEST['usuario']);
$senha=addslashes($_REQUEST['senha']);
 /* echo "$usuario.'-'.$senha";*/
include_once ("conexao.php");


$sql=("SELECT * FROM usuarios WHERE login='$usuario' AND senha='$senha' LIMIT 1");
$rs = mysqli_query($conexao, $sql);
$resulto=mysqli_fetch_assoc($rs);



//echo "Usuario: ".$resulto['nome'];

if(empty($resulto)){
    //Mensagem de Erro
    $_SESSION['loginErro']="Usuario ou senha invalido";
   
    //Redireciona o Usuario para tela de Login
    header("Location: ../index.php");
} else{
    //Define os valores atribuidos na sessao do usuario
    $_SESSION['usuarioId']=$resulto['idUser'];
    $_SESSION['usuarioNome']=$resulto['nome'];
    $_SESSION['usuarioNivelAcesso']=$resulto['nivel_acesso_id'];
    $_SESSION['usuarioLogin']=$resulto['login'];
    $_SESSION['usuarioSenha']=$resulto['senha'];

if($_SESSION['usuarioNivelAcesso']==1){
    header("Location: ../email.php");
}else{
    header("Location: ../eventos.html");
}



}

?>