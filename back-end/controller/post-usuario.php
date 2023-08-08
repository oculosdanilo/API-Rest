<?php

require '../model/Usuario.php';

function realizarLeitura() {

    $arquivo = "./senhas.txt";

    $abrir = fopen($arquivo, "r");

    $json = fread($abrir, filesize($arquivo));

    fclose($abrir);

    return $json;
}

   

function ultimo(){
   $leitura = realizarLeitura();
   $leitura = json_decode($leitura);
   $ultimoUsuario = end($leitura);
   return $ultimoUsuario->id;
}

/* --------------------------------------------------------------------------------------------------------- */

    // pega os dados do post
    $dados = json_decode(file_get_contents('php://input'));

    // cria um usuário com o modelo e com criptografia
    $usuario = new Usuario(ultimo() + 1, base64_encode($dados->nome), base64_encode($dados->email), base64_encode($dados->senha));

    // lê o conteúdo de senhas.txt
    $filecontent = realizarLeitura();  // print_r($filecontent);

    $arquivo = json_decode($filecontent);

    // adiciona o novo usuario no array
    array_push($arquivo, $usuario);

    $novoArquivo = json_encode($arquivo);

    escrever($novoArquivo);

/* --------------------------------------------------------------------------------------------------------- */

function escrever($json) {

    $arquivo = "./senhas.txt";
    //Variável $fp armazena a conexão com o arquivo e o tipo de ação.
    $fp = fopen($arquivo, "r+");

    //Escreve no arquivo aberto. 
    fwrite($fp, $json);
    echo $json;

    //Fecha o arquivo. 
    fclose($fp);
}
?>