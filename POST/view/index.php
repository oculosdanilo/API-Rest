<?php

function realizarLeitura()
{

    $arquivo = "../../senhas.txt";

    $abrir = fopen($arquivo, "r");

    $json = fread($abrir, filesize($arquivo));

    fclose($abrir);
    $resposta = json_decode($json);

    return $json;
}

$usuarios = realizarLeitura();
$usuarios = json_decode($usuarios, true);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" type="text/css" />
    <title>Cadastro</title>
</head>

<body>

    <form action="">
        <h1 class="titulo">Cadastro</h1>

        <label for="nomeUsuario">Nome</label>
        <input id="nome" placeholder="Digite Seu Nome" type="text" name="nomeUsuario" required>
        </br>
        <label for="emailUsuario">Email</label>
        <input id="email" placeholder="Digite Seu Email" type="email" name="emailUsuario" required>
        </br>
        <label for="senhaUsuario">Senha</label>
        <input id="senha" placeholder="Digite Sua Senha" type="password" name="senhaUsuario" required>
        </br>
        <button>ENVIAR</button>
    </form>

    <div class="emails" id="emails">

        <?php
        for ($i = 0; $i < count($usuarios); $i++)
        {

            $usuario = $usuarios[$i]['email'];
            $logins = base64_decode($usuario);

            echo $logins;
            echo "<br>";
        }

        ?>
    </div>

    <script src="./script.js"></script>

</body>

</html>