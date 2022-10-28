<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While...</title>
</head>
<body>
  <div>
    <form action="exercicio07.php" method="get">
      <?php
      $a = 1;
        while ($a <= 5) {
          echo "Valor $a: <input type='number' name='v$a' max='100' min='0' value='0'> <br>";
          $a++;
        }
      ?>
      <input type="submit" value="Enviar">
    </form>
  </div>
</body>
</html>