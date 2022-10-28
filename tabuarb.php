<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabuando For</title>
</head>
<body>
  <?php
    $num = isset($_GET["num"])?$_GET["num"]:1;
    for ($i=1; $i <= 10; $i++) { 
      $r = $num * $i;
      echo "$num x $i = $r <br>";
    }
  ?><br>
  <a class ="button" href="exercicio11.php">Voltar</a>
</body>
</html>