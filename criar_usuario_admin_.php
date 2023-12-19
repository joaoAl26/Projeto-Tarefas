<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
<h1 id="title">Cadastro de Usuário</h1>
    <div id="container">
    <form action="cad.php" class="signin">
        <h1>E-Mail</h1>
        <input type="text" name="senha">
        <h1>Nome Completo</h1>
        <input type="text" name="nome">
        <h1>Gênero</h1>
        <select name="genero">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
            <option value="N">Não Binário</option>
        </select>
        <h1>Senha</h1>
        <input type="text" name="senha">
        <h1>Confirme a sua senha</h1>
        <input type="text" name="confirmarSenha">
        <br>
        <br>
    </form>
    </div>
    <br>
    <button id="btn"><a href="index.php"><h2>Confirmar</h2></a></button>
</body>
</html>