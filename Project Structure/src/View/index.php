<?php
session_start();
?>

<!doctype html>
<html lang="pt-pt">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">


    <title>Entrar</title>
</head>


<body class="text-center">

<div class="container">
    <div id="logo">
        <img src="img/helpDesk.PNG"/>
    </div>
    <br>
    <form class="form-login" action="processar/validar_login.php">
        <label for="inputNome" class="sr-only">Nome</label>
        <input type="text" id="inputNome" class="form-control" name="usuario" placeholder="nome" required autofocus>
        <label for="inputSenha" class="sr-only">Senha</label>
        <input type="password" id="inputSenha" class="form-control" name="senha" placeholder="senha" required>
        <div class="checkbox mb-3" style="align-self:auto ">
                <input id="checkbox" type="checkbox" value="Lembrar-me"> Lembrar me
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Acessar</button>
        <p class="text-center text-danger">
            <?php
            if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset ($_SESSION['loginErro']);
            }
            ?>
        </p>
    </form>
    <p class="mt-5 mb-3 text-muted">&copy; SHPI Todos Direitos Reservados 2018</p>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>

</body>


</html>
