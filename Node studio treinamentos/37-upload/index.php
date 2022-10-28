<body>
  <?php
    if(isset($_POST['enviar-formulario'])):
      $fomatosPermitidos = array("png", "jpeg", "jpg", "gif");
      $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

      if(in_array($extensao, $fomatosPermitidos)):
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao";

        if(move_uploaded_file($temporario, $pasta.$novoNome)):
          $mensagem = "Upload feito com sucesso!";
        else:
          $mensagem = "Erro, não foi possível fazer o upload. ".$temporario." ".$pasta.$novoNome;
        endif;

      else:
        $mensagem = "Formato inválido";
      endif;

      echo $mensagem;
    endif;
  ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo"><br>
    <input type="submit" name="enviar-formulario" value="Enviar">
  </form>
</body>
