<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $valor = $_GET["v"];
  echo "A raiz de $valor é: ".number_format(sqrt($valor),2);
?>
<br>
<a href="aula08.html"><input type="button" value ="Voltar"/></a>  
</body>
</html>