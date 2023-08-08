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

//print json_encode($usuarios);

for($i=0;$i<count($usuarios);$i++)
{
$usuario = $usuarios[$i]['email'];
$logins = base64_decode($usuario);

echo $logins;
echo "<br>"; 
}
?>