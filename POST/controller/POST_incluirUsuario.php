<?php

require '../model/Usuario.php';

function realizarLeitura()
{

    $arquivo = "../../senhas.txt";

    $abrir = fopen($arquivo, "r");

    $json = fread($abrir, filesize($arquivo));

    fclose($abrir);

    return $json;
}

// pega os dados do post
$dados = json_decode(file_get_contents('php://input'));

//echo $dados->nome;
// cria um usuário com o modelo (com criptografia)
$usuario = new Usuario(base64_encode($dados->nome), base64_encode($dados->email), base64_encode($dados->senha));
//var_dump($usuario); 

// $json = json_encode($usuario);

// lê o conteúdo de senhas.txt
$filecontent = realizarLeitura();
// print_r($filecontent);

// json -> variavel
$arquivo = json_decode($filecontent);

// adiciona o novo usuario na array
array_push($arquivo, $usuario);

// variavel -> json
$novoArquivo = json_encode($arquivo);

escrever($novoArquivo);

function escrever($json)
{
    // endereço do arquivo 
    $arquivo = "../../senhas.txt";
    //Variável $fp armazena a conexão com o arquivo e o tipo de ação. 
    $fp = fopen($arquivo, "r+");

    //Escreve no arquivo aberto. 
    fwrite($fp, $json);
    echo $json;

    //Fecha o arquivo. 
    fclose($fp);
}

/* escrever($json); */
?>