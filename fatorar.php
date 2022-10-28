<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fatorando</title>
</head>
<body>
  <?php
    $num = isset($_GET["num"])?$_GET["num"]:1;
    $c = $num;
    $fat = 1;
    echo"<h1> Calculando fatorial de $num </h1>";
    do {
      $fat *= $c ;
      $c --;
    } while ($c >= 1);
    echo "<h2> $num! = $fat";
  ?><br>
  <a  class="button" href="exercicio09.php">Voltar</a>
</body>
</html>