<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rotinas em PHP</title>
</head>
<body>
  <?php
    /*
  function soma($a,$b){
        $s = $a + $b;
        echo "<p>A soma vale: $s</p>";
      }

      soma(10,4);
      soma(40,100);
      $x = 6;
      $y = 12;

      function soma1($a, $b){
        $s = $a+$b;
        return $s;
      }
      $res = soma1($x ,$y);
      echo "<p>A soma entre $x e $y vale: $res.</p>";
  */
  function soma(){
    $argumentos = func_get_args();
    $posicao = func_num_args();
    $soma = 0;
    for ($i=0; $i < $posicao; $i++) { 
        $soma += $argumentos[$i];
    }
    return $soma;
  }
  $r = soma(3,5,2,8,9,4);
  echo "A soma vale: $r";
  ?>
</body>
</html>
