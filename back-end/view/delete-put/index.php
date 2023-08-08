<?php 

session_start();
 //$_SESSION['email'] 

  
function realizarLeitura(){

  $arquivo = "../../controller/senhas.txt";

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
<html>
  <head>
    <title>Dados da Conta</title>
    <link rel='stylesheet' type='text/css' href='../../../style.css'>
  </head>
  <body>

    
    <?php 

  $email = json_encode($_SESSION['email']);

  #function mostrarId(){
    
   #  foreach($usuarios as $usuario->id){
    # $id = $usuario['id'][$email];
     #echo $id;
 # }   
#return mostrarId();
#}

   

  /*if(count($usuarios)){ 
  
*/
    


    
 
?>

    
    <div class="bloco">
      <h1 class="titulo">Dados</h1>
      <form action="../../controller/delete-usuario.php">
      <div class="b">
        <div class="idnome"></div>
      <label for="id"><b>Id: </b></label>
      <input class="inputID" type="number" name = "id" disabled>
        
      <label for = "nome"><b>Nome: </b></label>
      <input class="inputNOME" name = "nome" type="text" placeholder="Nome" >

      <label for="email"><b>Email: </b></label>
      <input name = "email" type="email" placeholder="Email" value="">

      <label for="senha"><b>Senha: </b></label>
      <input name = "senha" type="text" placeholder="Senha" value="">
    </div>
         
        <a class="button" onClick="history.backs()" >Cancelar</a>
        <button class="button" id="btnPut" type="submit">Atualizar</button>
        <button class="button" id="btnApagar" type="submit">Apagar</button>
         
       </form>
    </div>
 
      
      <script src="./script.js"></script>
  </body>
</html>