<!DOCTYPE html>
<html>
<head>
	<title>Lista de Usuários</title>
	<link rel="stylesheet" href="lista_usuarios.css">
</head>
<body>
	<h1 id="list">Lista de Usuários</h1>
	<div id="box">
	<table class="tabela">
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Senha</th>
			<th>Genero</th>
			<th>Tipo de Usuário</th>
			<th>Ações</th>
		</tr>
		<?php
include("config.php");

$sql = "SELECT * FROM tbuser";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
 
    while ($linha = $resultado->fetch_assoc()) {
       // echo "<li>{$linha['nome']}</li>";
        echo "<tr>";
        echo "<td>" . $linha['idUser'] . "</td>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['email'] . "</td>";
		echo "<td>" . $linha['senha'] . "</td>";
		echo "<td>" . $linha['genero'] . "</td>";
		echo "<td>" . $linha['tipoUsu'] . "</td>";
        echo "<td><a href='editar_usuario.php?idTask='" . $linha['idUser'] .">Editar</a></td>";
        echo"<td><a href='excluir_usuario.php?idTask='"  . $linha['idUser'] .">Excluir</a></td>";
        echo "</tr>";
    }

} else {
    echo "Nenhum usuário encontrado.";
}

$conexao->close();
         ?>
	</table>
</div>
	<a href="criar_usuario_admin_.php">Adicionar Usuário</a>
</body>
</html>