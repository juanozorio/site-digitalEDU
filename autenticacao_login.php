<?php
require_once'conexao_db.php';
session_start();

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

$query = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha';";

$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);	

echo $row;

$usuario = "";
while($rows = mysqli_fetch_assoc($result)) {
	$usuario = $rows['nome'];
	echo $usuario;
}

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: home.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}



?>