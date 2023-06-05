<?php
  require './ler.php';

  $usuarios = realizarLeitura();
  $usuarios = json_decode($usuarios);

  // Mostrar usuários
  //echo "login 1: " . $usuarios[0]->login . "<br>";
  //echo "senha 1: " . $usuarios[0]->senha . "<br>";
  //echo "<br>";
  //echo "login 2: " . $usuarios[1]->login . "<br>";
  //echo "senha 2: " . $usuarios[1]->senha . "<br>";


?>


<!DOCTYPE!>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title> Criptografia Login </title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

  
</div>
  <form action="autenticar.php" method="post">
   
    <div class="container">
      <div class="h1">
        <br>
        <h1> Autenticação Login: </h1>
      </div>

      <br>
      <div class="b">
        <label for="uname"><b>Email: </b></b></label>
        <br>
        <input type="text" placeholder="Digite Seu Email" name="email" required>

        <label for="psw"><b>Senha: </b></label>
        <input type="password" placeholder="Digite Sua Senha" name="senha" required>

      </div>

      <br>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
      <button type="submit">Login</button>
      <button><a href="./POST/view/index.php"> Cadastrar </a></button>
    </form>
    </div>
   
    

    <br>




</body>

</html>