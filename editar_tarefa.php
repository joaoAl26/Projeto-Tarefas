<?php

session_start();

if (!isset($_SESSION["id"])) {
	header("Location: login.php");
	exit();
}

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$id = $_SESSION["id"];
	$nome = $_POST['nome'];
	$email = $_POST['data'];

	$sql = "UPDATE Task SET id='$id', nome='$nome', data='$data', WHERE id=$id";

	if (mysqli_query($connn, $sql)) {
		echo "<script>alert('Tarefa editada com sucesso');</script>";
	} else {
		echo "Erro ao atualizar tarefa: " . mysqli_error($connn);
	}
	$_SESSION["email"] = $email;
	$_SESSION["nome"] = $nome;
	$_SESSION["senha"] = $senha;
	
	header("Location: Task.php");
	exit();
}else{

	$id = $_SESSION["id"];
	$sql = "SELECT * FROM User WHERE id=$id";
	$result = mysqli_query($cnonn, $sql);
	$row = mysqli_fetch_assoc($result);
	$nome = $row['nome'];
	$email = $row['email'];
	$senha = $row['senha'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="editar_tarefa.css">
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="container">
	<br>
		<h1>Editar Tarefa</h1>
    <textarea name="nome" id="nome" cols="30" rows="8"></textarea>
		<br>
		<h2>Data:</h2>
		<input type="date" name="data" value="<?php echo $data; ?>" placeholder="Data:">
		<br>
		<input class="botao" type="submit" name="submit" value="Salvar">
        <br>
        <button class="botao"><a href="./portal.php">Cancelar</a></button>
	</div>
	</form> 
</body>
</html>