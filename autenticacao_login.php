<?php
include ('conexao_db.php');
session_start();

$login = $_POST['email'];
$senha = $_POST['senha'];


$query = "SELECT * FROM usuarios WHERE email=\'$login\' and senha=\'$senha\';";

$result 

?>
