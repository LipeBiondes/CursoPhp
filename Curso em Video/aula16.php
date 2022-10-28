<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções Strings</title>
</head>
<body>
  <?php
  // 1 - printf();
    $prod = "leite";
    $preco = 4.5;

    printf ("O %s custa R$ %.2f <br>", $prod, $preco);

    /** Tabelas que o printf aceita:
     * %d valor decimal (positivo ou negativo)
     * %u valor decimal sem sinal (apenas positivos)
     * %f valor real
     * %s string
     */

    $x[0]=4;
    $x[1]=3;
    $x[2]=8;
    $v2 = array (3,7,6,5,4,3,6,7,9);
    print_r($x);
    // 2 - Print_r imprime um vetor.

    echo"<br>";
    print_r($v2);
    echo"<br>";
    var_dump($v2);
    echo"<br>";
    var_export($v2);

    // 3 - wordwrap();
    $txt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae placeat voluptatibus provident.";
    $res = wordwrap($txt, 50, "<br>\n", false);
    echo "<br>$res";

    // 4 - strlen();
    $t = "curso sem video";
    $tamanho = strlen($t);
    echo "<br>No texto $t, existem $tamanho caracteres.";

    // 5 - trim(); recorta os espaços desnecessários, ltrim() elimina espaço do inicio, rtrim() elimina o espaço do final.
    $nome = "  arroz com farinha   ";
    echo "<br>".strlen($nome);
    $novo = trim($nome);
    echo"<br>".strlen($novo);

    // 6 - str_word_count(); conta as palavras que existem numa string.
    $frase = "Vou estudar PHP pra karalho";
    $cont = str_word_count($frase,0); // ao mudar o 0 por 1 cria-se um array onde a posição do array simboliza a palavra e o valor dessa posição é a palavra.
    echo"<br>".$cont;

    // 7 - explode()
    $site = "Curso em vídeo";
    $vetor = explode(" ",$site); // neste caso sempre que encontrar uma posição em branco se divide
    echo "<br>";
    print_r($vetor);

    // 8 - str_split();
    $nome1 = "Alefe";
    $vetor1 = str_split($nome1); //joga cada letra em um indice
    echo "<br>";
    print_r($vetor1);

    // 9 - implode(); ou join();
    $vi[0] = "Curso";
    $vi[1] = "em";
    $vi[2] = "vídeo";
    echo"<br>";
    $tex = implode("#",$vi); // se quiser espçao coloque " " no lugar de "#".
    print($tex);

    // 10 - chr();
    $letra = chr(67);
    echo"<br> A letra de codigo 67 é: $letra";

    // 11 - ord();
    $letra2 = "C";
    $ord = ord($letra2);
    echo"<br>A letra '$letra2' tem o codigo: $ord";
    
    /*
    Nessa aula, veremos uma lista de funções para Strings usando PHP. São funções internas que já existem na linguagem. A lista de funções de manipulação de Strings que serão vistas nessa aula é composta pelas instruções:

    Função printf() : Permite exibir uma string com itens formatados.

    Função print_r() : Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.

    Função wordwrap() : Cria quebras de linha ou divisões em uma string em um tamanho especificado.

    Função strlen() : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).

    Função trim() : Elimina espaços em branco antes e depois de uma string.

    Função ltrim() : Elimina espaços no início de uma string.

    Função rtrim() : Elimina espaços em branco no final de uma string.

    Função str_word_count() : Conta quantas palavras uma string possui.

    Função explode() : Quebra uma string e coloca os itens em um vetor.

    Função str_split() : Coloca cada letra de uma string em uma posição de um vetor.

    Função implode() : Transforma um vetor inteiro em uma string.

    Função chr() : Retorna um caractere de acordo com seu código ASCII passado como parâmetro.

    Função ord() : Retorna o código ASCII de um caractere passado como parâmetro.
    */
  ?>
</body>
</html>