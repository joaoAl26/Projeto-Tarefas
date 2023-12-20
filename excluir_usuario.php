<?php
session_start();

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if ($_POST["confirmacao"] == "sim") {
		
		$id = $_POST["idUser"];
		$sql = "DELETE FROM tbuser WHERE id=$idUser";
		if (mysqli_query($conn, $sql)) {
			echo "<script> alert('Usuário excluído com sucesso.'); </script>";
			echo "<script> location.href='usu.php'; </script>";
		} else {
			echo "Erro ao excluir usuário: " . mysqli_error($conn);
		}
		exit();
	} else {
		echo "<script> alert('Exclusão cancelada.'); </script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="excluir_usuario.css">
	<title>Excluir</title>
</head>

<body>
<h1 id="">Excluir usuário</h1>
<div class="container">
	<form id="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<h1>Excluir usuário</h1>
		<p>Tem certeza que deseja excluir esse recado?</p>
		<input id="idUsu" type="hidden" name="idUsu" value="<?php echo $_GET['idUsu'] ?>">
		<div id="container-radio">
			<div>
				<input class="radio" type="radio" name="confirmacao" value="sim">Sim<br>
			</div>
			<div>
				<input class="radio" type="radio" name="confirmacao" value="nao" checked>Não<br>
			</div>
		</div>
		<input id="btn-excluir" type="submit" name="submit" value="Excluir">
	</form>
</body>
</div>
</html>