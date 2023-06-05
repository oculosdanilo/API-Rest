<?php

function token($tamanho = 40) {
    $string = md5(rand());
    $randomString = substr($string, 0, $tamanho);
    return $randomString;
}

$token = token();

?>
<form id="myForm" action="home.php" style="opacity: 0" method="post">
  <input name="email" value="<?=$_POST['email']?>">
  <input name="token" value="<?=$token?>">
  <input type="submit" id="btnSubmit">
</form>
<?php

$usuarios = file_get_contents('senhas.txt');
$usuarios = json_decode($usuarios, true);

$email = $_POST['email'];
$senha = $_POST['senha'];
$novoEmail = base64_encode($email);
$novaSenha = base64_encode($senha);


foreach ($usuarios as $usuario) {
  if ($usuario['email'] == $novoEmail && $usuario['senha'] == $novaSenha) {

    echo "<script>document.getElementById('myForm').submit();</script>";
    exit();
    
  }
 //$admin++;
}

echo ("<script>location.href='erro.php'</script>");
exit();

header('Location: home.php?email=' . urlencode($token));
    exit();

?>