<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificando...</title>
</head>
<body>
  <?php
    $sel = isset($_GET["sl"])?$_GET["sl"]:0;
    switch ($sel) {
      case 1:
      case 3:
      case 4:
      case 21:
      case 22:
      case 13:
      case 26:
        echo "Voce mora na regiao: Norte.";
        break;
      case 9:
      case 17:
      case 5:
      case 6:
      case 25:
      case 2:
      case 14:
      case 16:
      case 19:
        echo "Voce mora na regiao: Nordeste.";
        break;
      case 10:
      case 8:
      case 11:
      case 28:
        echo "Voce mora na regiao: Centro-Oeste.";
        break;
      case 12:
      case 24:
      case 7:
      case 18:
        echo "Voce mora na regiao: Sudeste";
        break;
      case 15:
      case 23:
      case 20:
        echo "Voce mora na regiao: Sul";
        break;

      default:
       echo "Nenhum estado selecionado!";
        break;
    }
  ?><br>
  <a href="exercicio06.php">Voltar</a>
</body>
</html>