

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <link rel="stylesheet" href="portal_admin.css">
</head>
<body>
    <header>
        
        <h1 id="nome"> Portal </h1>
        <nav>
            <ul>
            <div class="navigation_header" id="navigation_header">
             <a href="editar_usuario.php">Editar Usuários</a>
             <br>
             <a href="criar_tarefa.php">Adicionar Tarefa</a> 
             <br>
             <a href="perfil.php"> Seu Perfil</a> 
            </div>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <h2 id="oi">Bem vindo(a) ao portal do Administrador</h2>
    <br>
    <h1 id="list">Lista de Recados</h1>
    <div id="box">
    <table class="tabela">
		<tr>
			<th>ID</th>
			<th>Tarefa</th>
			<th>Data</th>
		</tr>
        <?php
include("config.php");

$sql = "SELECT * FROM tbtask";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
 
    while ($linha = $resultado->fetch_assoc()) {
       // echo "<li>{$linha['nome']}</li>";
        echo "<tr>";
        echo "<td>" . $linha['idTask'] . "</td>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['data'] . "</td>";
        echo "<td><a href='editar_tarefa.php?idTask='" . $linha['idTask'] .">Editar</a></td>";
        echo"<td><a href='excluir_tarefa.php?idTask='"  . $linha['idTask'] .">Excluir</a></td>";
        echo "</tr>";
    }

} else {
    echo "Nenhum usuário encontrado.";
}

$conexao->close();
         ?>
	</table>
</div>
    <h2>Funcionalidades exclusivas de Administrador(a)</h2> <a href="lista_usuarios.php">Lista de Usuários</a>
<br>
<br>
<br>
<a href="logout.php">Sair</a>
</body>
</html>