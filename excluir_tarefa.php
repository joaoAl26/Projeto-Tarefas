<?php
session_start();

if (!isset($_SESSION["id"])){
	header("Location: login.php");
	exit();
}

include("config.php");
include("Task.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["confirmacao"] == "sim") {
		
		$id = $_SESSION["id"];
		$sql = "DELETE FROM Task WHERE id=$id";

		if (mysqli_query($connn, $sql)) {
			
			session_destroy();
			echo "Recado excluído com sucesso.";
		} else {
			echo "Erro ao excluir recado: " . mysqli_error($connn);
		}
		exit();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Excluir recado</title>
	<link rel="stylesheet" href="./excluir_recado.css">
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="container">
	<h1>Excluir recado</h1>
	<p>Tem certeza que deseja excluir essa tarefa?</p>
		<input type="radio" name="confirmacao" value="sim">Sim
        <br>
		<input type="radio" name="confirmacao" value="nao" checked>Não
        <br>
		<input class="botao" type="submit" name="submit" value="Excluir">
		<br>
		<button class="botao"><a  href="./portal.php" >Voltar</a></button>
	</div>	
	</form>
</body>
</html>