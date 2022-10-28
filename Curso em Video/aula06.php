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
  /*
    $a = 1;
    $b = 3;
    $c = $a + $b;
    $c+=;
    $a++;

    Operadores de atribuição

    Adição : $a += 2
    Subtração: $a -= 2
    Multiplicação: $a *= 2
    Divisão: $a /= 2
    Módulo: $a %= 2
    Concatenação: $a .= 2
    */

    $produto = "Alicate";
    $preco = $_GET["p"];
    echo "O produto: $produto, vale: R$".number_format($preco, 2, ",", ".");
    $preco -= ($preco*10/100);
    echo "<br> O novo preco com 10% de desconto vale: R$".number_format($preco, 2, ",", ".");
    
    $atual = $_GET["aa"];
    echo "<br> O ano atual é: $atual";
    $anterior = --$atual;
    echo "<br>  O ano anterior é: $anterior";

    /* Variáveis referenciadas*/
      $a = 3;
      $b = &$a;
      $b += 5;
      echo "<br> Variável A: $a";
      echo "<br> Variável B: $b";
    // Variáveis de variáveis
    $site = "cursoEmVideo";
    $$site = "CursoPHP";
    echo"<br> Variável site: $site";
    echo"<br> Variável cursoEmVideo: $cursoEmVideo";

  ?>
</body>
</html>