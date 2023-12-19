<?php

session_start();


include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$idUser = $_SESSION["id"];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$genero = $_POST['genero'];


	$sql = "UPDATE User SET nome='$nome', email='$email', senha='$senha', genero='$genero', WHERE id=$idUser";

	if (mysqli_query($connn, $sql)) {
		echo "<script>alert('Usuário atualizado com sucesso');</script>";
	} else {
		echo "Erro ao atualizar usuário: " . mysqli_error($connn);
	}

	$_SESSION["id"] = $idUser;
	$_SESSION["nome"] = $nome;
	$_SESSION["email"] = $email;
	$_SESSION["senha"] = $senha;
	$_SESSION["genero"] = $genero;
	
	header("Location: User.php");
	exit();
}else{

	$sql = "SELECT * FROM User";
	$result = mysqli_query($connn, $sql);
	$row = mysqli_fetch_assoc($result);
	$nome = $row['nome'];
	$email = $row['email'];
	$senha = $row['senha'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar editar_usuario</title>
    <link rel="stylesheet" href="./editar_usuario.css">
</head>
<body>
	<h1>Editar cadastro</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Nome:
        <input type="text" name="nome" value="<?php echo $nome;?>">
		<br>
		Email:
		<input type="email" name="email" value="<?php echo $email; ?>">
		<br>
		Senha:
		<input type="password" name="senha" value="<?php echo $senha; ?>">
		<br>
		<input type="text" name="">
		<br>
		<input type="submit" name="submit" value="Salvar">
        <br>
        <button class="botao"><a  href="./index.php" >Voltar</a></button>
	</form>
</body>
</html>