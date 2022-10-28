<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>
  <form action="dados.php" method="GET">
    Nome: <input type="text" name="nome" id="" required>
    Email: <input type="email" name="email" id="" required>
    <input type="submit" value="Enviar">
  </form>
  <a href="dados.php?idade=25&sobrenome=Santos">Enviar</a>
</body>
</html>