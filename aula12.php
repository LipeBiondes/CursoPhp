<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do while</title>
</head>
<body>
  <?php
    $c = 20;
    do {
      echo "$c. <br>";
      $c -= 2;
    } while ($c >= 1);
  ?>
</body>
</html>