<?php

require "./ler.php";

$usuarios = realizarLeitura();
$usuarios = json_decode($usuarios);

session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Logado!</title>
  <link rel='stylesheet' type='text/css' href='./style.css'>
</head>

<body>
  <div class="bloco">
<h1 class="titulo">Bem-vindo(a)
    <?php  echo $_SESSION['email']  ?> 
</h1>

    <p class="token">
      Token de acesso:
      <?php echo $_POST["token"]; ?>
    </p>

    <div class="btns-2">
      <button class="btn"><a href="./back-end/view/get/usuarios.html"> Usuários no sistema</a></button>
      <button class="btn"><a href="./back-end/view/get-usuario.php"> Usuário no sistema</a></button>
      <button class="btn"><a href="./back-end/view/delete-put/index.php"> Dados do usuário </a></button>

    </div>
  </div>
</body>

</html>