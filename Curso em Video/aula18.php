<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vetores e Matrizes p/1</title>
</head>
<body>
  <pre>
    <table border="1"> <tr>
  <?php
    // Vetores em PHP
    $n[0] = 3;
    $n[1] = 5;
    // ou entao:
    $a = array(3,5,8,2);
    $a[] = 4;
    print_r($a);

    // RANGE (5,20,2) pula de 2 em 2
    $c = range(5,20,2);
    echo"<br>";
    print_r($c);
    echo"<br>";

    // FOREACH
    foreach ($c as $key => $value) {
      echo"<td>$value ";
    }
  ?>
    </table>
  </pre>
  <?php
    // Chaves personalisadas
    $v = array( 3=>5,
                1=>9,
                0=>8,
                7=>7);
    $v[] = 4;
   print_r($v);
  //  unset() retira um valor
   unset($v[0]);
   echo "<br>";
   print_r($v);
  //  chaves associativas
    $cad = array( "nome" => "Alefe",
                  "idade" => 23,
                  "peso" => 92.6);
    $cad["fuma"] = false;
    echo "<br>";
    print_r($cad);
    echo "<br>";

    foreach($cad as $campo => $valor){
      if ($campo === "fuma") {
        if ($valor) {
          echo"O valor de $campo é fuma";
        } else {
          echo"O valor de $campo é não fuma";
        }
      }else{
        echo"O valor de $campo é $valor <br>";
      }
    }

    // Matrizes em PHP
    echo "<br>";
    $n = array( array(6,4), 
                array(4,9), 
                array(3,2));
    $n [0][1] = $n[2] [0];
    print_r($n);
    
  ?>
</body>
</html>