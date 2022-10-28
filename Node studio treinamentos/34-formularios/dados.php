<?php

$nome = $_GET['nome'];
$email = $_GET['email'];

echo "Seu nome: $nome <br> Seu email: $email <br>";
echo $_GET['idade']."<br>".$_GET['sobrenome'];
echo '<br>';
echo var_dump($_GET);