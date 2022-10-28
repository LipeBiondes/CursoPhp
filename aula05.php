<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <?php
      $n1 = 8764;
      $n2 = 2;
      $m = ($n1+$n2)/2;
      $som = $n1 + $n2;
      $sub = $n1 - $n2;
      $mult = $n1 * $n2;
      $div = $n1 / $n2;
      $mod = $n1 % $n2;

      echo " Numero 1: $n1, Numero 2: $n2
        <br> A soma vale: $som
        <br> A subtração vale: $sub
        <br> A multiplicação vale: $mult
        <br> A divisao vale: $div
        <br> O módulo vale: $mod
        <br> A média vale: $m<br>";
        
      echo "<br> O valor de $n1 em moeda é: R$".number_format($n1, 2, ",", ".");

      // abs() pega o valor absoluto "elimina sinais"
      // pow() potenciação
      // sqrt() Raiz quadrada
      // round () Arredondamento
      // intval() Valor inteiro da variável
      // number_format() Formatação
      
    ?>
  </div>
 
</body>
</html>