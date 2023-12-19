<?php
session_start();
if (!isset($_SESSION["id"])) {
	header("Location: perfil.php");
	exit();
}
$id = $_SESSION["id"];
$nome = $_SESSION["nome"];
$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
	<link rel="stylesheet" href="perfil.css">
</head>
<body>
<form>
	<br>
	<h1>Seu perfil</h1>
	<p>ID: <?php echo $id; ?></p>
	<p>Nome: <?php echo $nome; ?></p>
	<p>Email: <?php echo $email; ?></p>
	<p><a href="editar_usuario.php">Editar Cadastro</a></p>
	<p><a href="excluir_usuario.php">Excluir Cadastro</a></p>
	</form> 
</body>
</html>