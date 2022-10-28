<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
</head>
<body>
  <?php
    $n = isset($_GET["num"])?$_GET["num"]:0;
    $op = isset($_GET["oper"])?$_GET["oper"]:1;

    switch ($op) {
      case 1:
        $r = $n*2;
        break;
      case 2:
        $r = $n^3;
        break;
      case 3:
        $r = sqrt($n);
        break;
      default:
        $r = "nenhuma opção selecionada";
        break;
    }

  echo "O resultado da operção foi: $r."
  ?> <br>
  <a href="aula10.php">Voltar</a>
</body>
</html>