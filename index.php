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


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title> Criptografia Login </title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="./img/logo.png">
</head>

<body>

  
</div>
  <div class="form">
    <form action="autenticar.php" method="post">
   
   <div class="container">
     <div class="h1">
       <br>
       <h1> Login </h1><img alt="logo-livro" style="height: 12%;width: 12%;padding-left: 3%;" src="./img/logo.png">
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

   <div class="btns">
     <button class="button" type="submit">Login</button>
     <a class="button" href="./back-end/view/post/index.php"> Cadastrar </a>   </div>
     <br><br><p style="font-size:1.2rem;text-align:center;">&copy; Camila Silva, Danilo Lima e Juliana Leal</p>

   </form>
</div>
    <br>
</body>

</html>