<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While</title>
</head>
<body>
  <?php
    $c = 1;
    while ($c <= 10) {
      echo "$c. <br>";
      $c++;
    }
    $s = 10;
    while ($s >= 1) {
      echo "$s. <br>";
      $s--;
    }
  ?>
</body>
</html>