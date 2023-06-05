<?php

  require "./ler.php";

  $usuarios = realizarLeitura();
  $usuarios = json_decode($usuarios);
  
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Logado!</title>
    <link rel='stylesheet' type='text/css' href='./style.css'>
  </head>
  <body><div class="bloco">
         <?php if (isset($_POST['email'])): ?>
  <h1 class="titulo">Bem-vindo(a) <?php echo $_POST['email']; ?>!</h1>
    <?php endif; ?>
<p class="token">
  Token de acesso: <?php echo $_POST["token"]; ?>
</p>
<div class="">
  <button style="width: 100%;background-color: white;"><a href="./get/index.php"> Usuários no sistema</a></button>
  </div>
  </div>
  </body>
</html>


