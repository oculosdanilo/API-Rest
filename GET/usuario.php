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

    <title>Usuario</title>

</head>

<body>
 
    <div class="bloco">
       
<h1 class="titulo">Usuário no Sistema:</h1>
    <form action="" method="get">
        <div class="email" id="email">
            ID: <input type="number" name="id" id="id" min="0" max="4" required>
            <input type="submit" value="Enviar" name="btn" class="button">
            <?php  
            
            if (isset($_GET['btn'])) {
                $id = $_GET['id'];

                if(count($usuarios)){
                    $usuario = $usuarios[$id]['email'];
                    $logins = base64_decode($usuario);
                echo "<h2 class='titulo'>Usuário: <h2>";
                echo $logins;
                }
            } // fecha if btn
            
            ?>
        </div>
    </form>
    </div>

</body>
</html>