<?php
session_start();
require_once'conexao_db.php';    

$nome = $_POST["nome"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$senha = $_POST["senha"];


$query = "INSERT INTO usuarios (nome, email, celular, senha) VALUES ('$nome', '$email', '$celular', '$senha');";



?>