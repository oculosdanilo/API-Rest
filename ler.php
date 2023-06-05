<?php
  function realizarLeitura(){
    
    $arquivo = "./senhas.txt";
  
    $abrir = fopen($arquivo, "r");

    $json = fread($abrir, filesize($arquivo));

    fclose($abrir);
    $resposta = json_decode($json);

    return $json;
  }

?>