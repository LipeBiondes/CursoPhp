<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabuando</title>
</head>
<body>
  <?php
    $num = isset($_GET["sel"])?$_GET["sel"]:1;
    echo "<h1> Mostrando a tabuada de $num. </h2>";
    $c = 1;
    $r = 0;
    do {
      $r = $num * $c;
      echo "$num * $c = $r <br>";
      $c++;
    } while ($c <= 10);
  ?><br>
  <a class="button" href="exercicio10.php">Voltar</a>
</body>
</html>