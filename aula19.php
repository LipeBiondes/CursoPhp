<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vetores e matrizes p/2</title>
</head>
<body>
  <pre>
  <?php
  // exibindo vetor
    $n = array("A","J","M","X","K");
    $n[] = "O";
    array_push($n,"N"); //acrescenta depois do ultimo valor
    array_pop($n); // elimina o ultimo valor
    print_r($n); // mostra o vetor
    var_dump($n); // mostra o vetor com mais informações
    echo "O vetor tem: ".count($n)." elementos. <br>"; // count() conta o tanto de casas do vetor
    
    array_unshift($n, "B"); // adiciona no primeiro elemento do vetor
    var_dump($n);
    echo"<br>";

    array_shift($n); // retira o primeiro elemento do vetor
    var_dump($n);
    echo"<br>";

    // Operando Vetores
    $v = array(4,9,2,6);
    var_dump($v);
    echo"<br>";

    sort($v);
    var_dump($v);
    echo"<br>";

    // Ordem reversa rsort();
    rsort($v);
    var_dump($v);
    echo"<br>";

    // Ordenação associativa muda os valores junto com os indices.
    $v = array(4,9,2,6);
    var_dump($v);
    echo"<br>";

    asort($v);
    var_dump($v);
    echo"<br>"; 
    
    // Ordem associativa reversa arsort();
    arsort($v);
    var_dump($v);
    echo"<br>";

    // Ordenando por chaves (indices) ksort();
    ksort($v);
    var_dump($v);
    echo"<br>";

    // Ordenando por chaves reversa (indices) krsort();
    krsort($v);
    var_dump($v);
    echo"<br>";

  ?>
  </pre>
</body>
</html>