<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contando</title>
</head>
<body>
  <?php
    $inicio = isset($_GET["ini"])?$_GET["ini"]:1;
    $final = isset($_GET["fin"])?$_GET["fin"]:10;
    $contador = isset($_GET["cont"])?$_GET["cont"]:1;
    if ($inicio < $final) {
      while ($inicio <= $final) {
        echo "$inicio <br>";
        $inicio += $contador;
      }
    }elseif ($inicio > $final) {
      while ($inicio >= $final) {
        echo "$inicio <br>";
        $inicio -= $contador;
      }
    }else{
      echo"Impossível contar pois os números são iguais!";
    }
  ?><br>
  <a href="exercicio08.php">Voltar</a>
</body>
</html>