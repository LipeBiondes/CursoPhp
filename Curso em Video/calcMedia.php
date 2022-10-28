<?php
  $n1 = isset($_GET["nota1"])?$_GET["nota1"]:"não informado";
  $n2 = isset($_GET["nota2"])?$_GET["nota2"]:"não informado";
  $m = ($n1 + $n2)/2;
  echo "A média entre $n1 e $n2 é $m. <br>";
  if ($m >= 7 && $m <=10) {
    $r = "APROVADO";
  } elseif ($m < 7 && $m >=5) {
    $r = "RECUPERAÇÃO";
  } else {
    $r = "REPROVADO";
  }
  echo "Situação do aluno: $r <br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="exercicio03.php">Voltar</a>
</body>
</html>