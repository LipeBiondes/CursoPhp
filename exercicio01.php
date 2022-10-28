<!DOCTYPE html>
  <html lang="en">
  <head>
  <?php
  $a = isset($_GET["ano"])?$_GET["ano"]:"Idade não informada";
  $i = date("Y") - $a;

  echo "Você nasceu em $a e tem $i anos. <br>";

  if ($i >= 18) {
    $v = "já pode votar";
    $d = "já pode dirigir";
  }else{
    $v ="não pode votar";
    $d = "não pode dirigir";
  }
  echo "Com essa idade você pode $v e $d.";
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voltar</title>
  </head>
  <body>
    <a href="aula09.php">Voltar</a>
  </body>
  </html>