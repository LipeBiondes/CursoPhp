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
    Operadores Relacionais
      Maior: 1 > 2
      Menor: 2 < 3
      Maior ou igual: 2 >= 2
      Menor ou igual: 3 <= 4
      Diferente: 2 != 3
      Igual: 2 == 2
      idêntico: $a === $b
    Operador unario
      a>b? a: b;
      $maior = 2>3?2:3;
      echo $maior;
    
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores recebidos foram: $n1 e $n2 <br>";
    $r = ($tipo == "s")? $n1+$n2:$n1*$n2;
    echo "$r"
    
    $a = 3;
    $b = "3";
    $r = ($a === $b)?"SIM":"NAO";
    echo "As variaveis A e B são iguais? $r";
    */

    $numero1 = $_GET["n1"];
    $numero2 = $_GET["n2"];
    $m = ($numero1+$numero2)/2;
    echo "A media entre $numero1 e $numero2 é: $m <br>";
    echo "O aluno está: ".(($m<7)? "Reprovado":"Aprovado");

  /**
   * Operadores lógicos
   * and ou &&
   * or ou ||
   * xor
   * !
   */
    $nascimento = $_GET["n"];
    $idade = 2022 - $nascimento;
    echo "<br> Quem nasceu em $nascimento tem $idade anos.";
    echo "<br> Sou obrigado a votar? ".(($idade>=18&&$idade<=64)? "SIM":"NAO");
    
  ?>
</body>
</html>