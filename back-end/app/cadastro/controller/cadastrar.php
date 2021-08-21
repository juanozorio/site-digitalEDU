<?php
use app\conexao\ConexaoDB;


$nome = $_POST["nome"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$senha = $_POST["senha"];


$query = "INSERT INTO usuarios (nome, email, celular, senha) VALUES ('$nome', '$email', '$celular', '$senha');";



?>