<!DOCTYPE html>
  <html lang="en">
  <head>
  <?php
  $a = isset($_GET["ano"])?$_GET["ano"]:"Idade não informada";
  $i = date("Y") - $a;

  echo "Você nasceu em $a e tem $i anos. <br>";

  if ($i <16) {
    $tipoVoto = "não vota.";
  } elseif (($i >= 16 && $i < 18) || ($i > 65)) {
      $tipoVoto = "voto opcinal.";
  } else {
      $tipoVoto = "voto obrigatório.";
    }
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voltar</title>
  </head>
  <body>
    <?php
      echo "Para essa idade, $tipoVoto";
    ?> <br>
    <a href="aula09.php">Voltar</a>
  </body>
  </html>