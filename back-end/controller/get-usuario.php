<?php

function realizarLeitura(){

$arquivo = "./senhas.txt";

$abrir = fopen($arquivo,"r");

$json = fread($abrir,filesize($arquivo));

fclose($abrir);

$resposta = json_decode($json);

return $json;

}

$usuarios = realizarLeitura();
    $usuarios=json_decode($usuarios,true);


function maximo(){
    $usuarios = realizarLeitura();
    $usuarios=json_decode($usuarios,true);
    return count($usuarios) - 1;
   
}

//print json_encode($usuarios);

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' type='text/css' href='../../style.css'>

    <title>Usuario</title>

</head>

<body>
 
    <div class="bloco">
       
<h1 class="titulo">Usuário no Sistema:</h1>
    <form action="" method="get">
        <div class="email" id="email">
            ID: <input type="number" name="id" id="id" min="0" max="<?php echo maximo();?>" required>
            <p>ID de 0 a <?php echo maximo();?></p>
            <input type="submit" value="Enviar" name="btn" class="btn">
            <?php  

            
            if (isset($_GET['btn'])) {
                $id = $_GET['id'];
                if(count($usuarios)){
                    $usuario = $usuarios[$id]['email'];
                    $logins = base64_decode($usuario);
                echo "<h2 class='titulo'>Usuário: <h2>";
                echo $logins;
                }

                elseif ($logins === null) {
                    echo "<h2 class='titulo'> Não existe esse usuario <h2>";
                }
            } // fecha if btn
            
            ?>
        </div>
    </form>
    </div>

</body>
</html>