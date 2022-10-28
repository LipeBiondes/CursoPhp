<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primando</title>
</head>
<body>
  <?php
    $num = isset($_GET["num"])? $_GET["num"] : 2;
    echo "Analisando o numero: $num...<br>";
    $a = 0;
    echo"Valores mútiplos: ";
    for ($i=1; $i<=$num; $i++) {
      $r = $num % $i;
      if ($r == 0) {
        $a++;
        echo "$i ";
      }
    }
    if ($a > 2) {
      echo"<br>Total de múltiplos: $a<br>";
      echo"Resultado: $num NÃO É PRIMO!";
    }else{
      echo"<br>Total de múltiplos: $a<br>";
      echo"Resultado: $num É PRIMO!";
    }
  ?><br>
  <a class="button" href="exercicio12.php">Voltar</a>
</body>
</html>