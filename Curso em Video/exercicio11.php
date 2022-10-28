<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabuar For</title>
</head>
<body>
  <form action="tabuarb.php" method="get">
    <select name="num">
      <?php
        for ($i=1; $i<=10; $i++) { 
          echo"<option value='$i'>$i</option>";
        }
      ?>
    </select>
    <input class = "button" type="submit" value="Calcuar Tabuada">
  </form>
</body>
</html>