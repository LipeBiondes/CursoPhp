<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contagem Personalizada</title>
</head>
<body>
  <form action="contar.php" method="get">
    Inicio: <input type="number" name="ini"> <br>
    Fim: <input type="number" name="fin"> <br>
    Incremento: <select name="cont">
      <?php
        $i = 1;
        while ($i <=10) {
          echo"<option value='$i'>$i</option>";
          $i++;
        }
      ?>
    </select><br>
    <input type="submit" value="Contar">
  </form>
</body>
</html>