<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rotinas PHP parte 2</title>
</head>
<body>
  <?php
  include "funcoes.php";
  // passagem por referencia
  function teste1($x1)
  {
    $x1 += 2;
    echo"<p>O valor de X é: $x1</p>";
  }
  $a = 3;
  teste1 ($a);
  echo"<p>O valor de A é: $a</p>";

  function teste2(&$x){
    $x += 2;
    return $x;
  }
  $a = 5;
  echo"O valor de A é: ".teste2($a);

  // rotina externas (include "";) include "funcoes.php";

  echo "<h1> Testando novas funções </h1>";
  ola();
  mostrarValor(4);
  echo"<h2> Finalizando programa.</h2>";

  // require (necessário existir o arquivo se não da erro total.) require "funcoes.php";
  // require_once include_once (once = carregar apenas uma vez)
  
  ?>
</body>
</html>