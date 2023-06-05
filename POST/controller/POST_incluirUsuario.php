<?php

    require '../model/Usuario.php';

    //
    $dados = json_decode(file_get_contents('php://input'));
    
    //echo $dados->nome;

   $usuario = new Usuario($dados->nome, $dados->email, $dados->senha);
   //var_dump($usuario); 
    
    $json = json_encode($usuario);
    
    function escrever($json){ 
        // endereço do arquivo 
        $arquivo = "../../senhas.txt"; 
        //Variável $fp armazena a conexão com o arquivo e o tipo de ação. 
        $fp = fopen($arquivo, "r+");

        //Escreve no arquivo aberto. 
        fwrite($fp, $json); 
        
        //Fecha o arquivo. 
        fclose($fp); 
    }

    escrever($json);
?>