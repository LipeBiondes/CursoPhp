<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
  $ano = isset($_GET["ano"])? $_GET["ano"] : 0;
  $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
  $idade = $ano == 0? "[idade nao informada]":(date("Y") - $ano);
  echo "$nome é $sexo e tem $idade anos.";
?><br> 
<a href="aula08.html"><input type="button" value ="Voltar"/></a> 
</body>
</html>