<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>funções string parte 2</title>
</head>
<body>
  <?php
    // 12 - strtolower(); tudo minusculo
    $nome = "Alefe Filipe";
    echo strtolower($nome);

    // 13 - strtoupper(); tudo maiusculo
    echo "<br>".strtoupper($nome);

    // 14 - ucfirst(); primeira letras em maiusculas
    echo "<br>".ucfirst(strtolower($nome));

    // 15 - ucwords();
    echo "<br>".ucwords($nome);

    // 16 - strrev(); fica ao contrário
    echo "<br>".strrev(strtolower($nome));

    // 17 - strpos(); qual posição uma substring é encontrada.
    $texto = "Estou aprendendo PHP";
    $pos = strpos($texto,"PHP");
    print("<br>A string foi encontrada na posição: $pos");

    // 18 - stripos();
    $texto = "Estou aprendendo php";
    $pos = stripos($texto,"PHP");
    print("<br>A string foi encontrada na posição: $pos");

    // 19 - substr_count();
    $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
    $cont = substr_count($frase, "PHP");
    print("<br> na frase: '$frase' <br> PHP encontrado $cont vezes");

    // 20 - substr();
    $site = "Curso em Video";
    $sub = substr($site,0,6);
    echo "<br>$sub ";

    // 21 - str_pad
    print("<br>".str_pad($nome, 15, "#", STR_PAD_RIGHT)); //STR_PAD_RIGHT, STR_PAD_CENTER, STR_PAD_LEFT.

    // 22 - str_repeat
    $txt = str_repeat("Php ",5);
    print("<br> $txt");

    // 23 - str_replace()
    $frasi = "Gosto de estudar Matemática!!!";
    echo"<br> Antes: $frasi";
    print("<br>Depois: ".str_replace("Matemática", "PHP", $frasi));
    // 24 - str_ireplace();
    $frasi = "Gosto de estudar Matemática, Matemática é muito bom!";
    echo"<br> Antes: $frasi";
    print("<br>Depois: ".str_ireplace("matemática", "PHP", $frasi));
    
  ?>
</body>
</html>