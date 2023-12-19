<!DOCTYPE html>
<html>
<head>
	<title>Lista de Usuários</title>
	<link rel="stylesheet" href="lista_usuarios.css">
</head>
<body>
	<h1>Lista de Usuários</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
		</tr>
		<?php
        include("config.php");
         $sql = "select * from User";
         $result = $connn->query($sql) or die($connn->error);
		
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['nome'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td><a href='editar_usuario.php?id=" . $row['id'] . "'>Editar</a> | <a href='excluir_usuario.php?id=" . $row['id'] . "'>Excluir</a></td>";
			echo "</tr>";
		}
		?>
	</table>
	<a href="criar_usuario(admin).php">Adicionar Usuário</a>
</body>
</html>