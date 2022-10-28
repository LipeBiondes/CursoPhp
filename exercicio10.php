<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabuada 1-10</title>
</head>
<body>
  <form action="tabuar.php" method="get">
    Número: <select name="sel">
      <?php
        $c = 1;
        do {
          echo"<option value='$c'> $c </option>";
          $c++;
        } while ($c <= 10);
      ?>
    </select>
    <button class="button" type="submit">Tabuar</button>
  </form>
</body>
</html>