<?php
/**
 * Filtros
 * FILTER_VALIDATE_INT verifica número inteiros
 * FILTER_VALIDATE_EMAIL verifica email
 * FILTER_VALIDATE_FLOAT verifica numeros quebrados
 * FILTER_VALIDATE_IP verifica se é um ip
 * FILTER_VALIDATE_URL verifica se é uma url valida
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <?php
    if (isset($_POST['enviar-formulario'])):
//    Array de erros
      $erros = array();
//    Validações
      if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] = "Idade precisa ser um inteiro!";
      endif;

      if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        $erros[] = "Email inválido!";
      endif;

      if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] = "Peso precisa ser um float!";
      endif;

      if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        $erros[] = "IP inválido!";
      endif;

      if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        $erros[] = "URL inválida!";
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
    Idade: <input type="text" name="idade"><br>
    Email: <input type="email" name="email"><br>
    Peso: <input type="text" name="peso"><br>
    IP: <input type="text" name="ip"><br>
    URL: <input type="text" name="url"><br>
    <button type="submit" name="enviar-formulario">Enviar</button>
  </form>
</body>
</html>