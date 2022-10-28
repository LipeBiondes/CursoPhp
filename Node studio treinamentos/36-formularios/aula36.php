<?php
/**
 * Sanitização - LIMPAR AS VARIAVEIS
 * Funções (filter_input - filter_var)
 * FILTER_SANITIZE_SPECIAL_CHARS
 * FILTER_SANITIZE_NUMBER_INT
 * FILTER_SANITIZE_EMAIL
 * FILTER_SANITIZE_URL
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <?php
    if (isset($_POST['enviar-formulario'])):
//    Array de erros
      $erros = array();

//    Sanitize
      $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);

      $idade = filter_input(INPUT_POST,'idade', FILTER_SANITIZE_NUMBER_INT);
      if(!filter_var($idade, FILTER_VALIDATE_INT)):
        $erros[] = "Idade precisa ser um inteiro";
      endif;

      $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[]= "Email inválido";
      endif;

      $url = filter_input(INPUT_POST,'url', FILTER_SANITIZE_URL);
      if(!filter_var($url, FILTER_VALIDATE_URL)):
        $erros[]= "URL inválida";
      endif;

    endif;

//  Exibindo os erros
    if(!empty($erros)):
      foreach ($erros as $erro):
        echo"<li> $erro </li>";
      endforeach;
    else:
      echo"Parabés, tudo correto!";
    endif;

  ?>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="text" name="idade"><br>
    Email: <input type="text" name="email"><br>
    URL: <input type="text" name="url"><br>
    <button type="submit" name="enviar-formulario">Enviar</button>
  </form>
</body>
</html>