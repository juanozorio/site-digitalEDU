<?php
require_once ('conexao_db.phpX');

$nome = $_POST["nome"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$senha = $_POST["senha"];

echo "$nome <br>";
echo "$email <br>";
echo "$senha <br>";
echo "$celular <br>";

$sql = "INSERT INTO usuarios (nome, email, celular, senha) VALUES (\'Juan Ozorio da Silva\', \'juan@dasa.com.br\', \'21990593311\', \'8798\');";


?>