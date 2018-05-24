<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Pagina para realizar o login">
    <meta name="author" content="Booking Tickets">
     <link rel="icon" href="img/favicon.ico">

     <title>Login</title>

     <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">


    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>


      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div id="logo">
    <img src="img/"/>
  </div>
  <?php
  unset(
      $_SESSION['usuarioId'],
      $_SESSION['usuarioNome'],
      $_SESSION['usuarioNivelAcesso'],
      $_SESSION['usuarioLogin'],
      $_SESSION['usuarioSenha']);
  ?>
    <div class="container">
      
  <p class="text-center text-danger">
    
    <?php
    if(isset($_SESSION['loginErro'])){
      echo $_SESSION['loginErro'];
      unset ($_SESSION['loginErro']);
    }
    ?>
  </p>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
