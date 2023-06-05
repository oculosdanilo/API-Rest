<?php

function realizarLeitura(){

$arquivo = "../senhas.txt";

$abrir = fopen($arquivo,"r");

$json = fread($abrir,filesize($arquivo));

fclose($abrir);

$resposta = json_decode($json);

return $json;

}

$usuarios = realizarLeitura();
$usuarios=json_decode($usuarios,true);

//print json_encode($usuarios);

?>




<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' type='text/css' href='../style.css'>

    <title>Usuarios</title>

</head>

<body>

    <div class="bloco" style="justify-content: flex-start;">

    <h1 class="titulo">Usuários no Sistema:</h1>

    <div class="emails" id="emails">

        <?php 
        for($i=0;$i<count($usuarios);$i++){

            $usuario = $usuarios[$i]['email'];
            $logins = base64_decode($usuario);
        
            echo $logins;
            echo "<br>"; 
        }

        ?>
    </div>
    </div>

</body>
</html>