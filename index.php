
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="split left">
        <div class="centered">
       <img src="tasks.png" alt="">
        </div>
      </div>
      <div class="split right">
        <h1 id="title">Login</h1>
        <div class="centered login">
            <div class="box">
                <form id="form" action="login.php">
                <h1>E-mail</h1>
                <input type="text" name="email" > 
                <h1>Senha</h1>
                <input type="text" name="senha">
                <br>
                <br>
                <br>
            </form>
            </div>
            <button id="entrar"><a href="portal_user.php"><h2>Entrar</h2></a></button>
            <h1 id="cadastro">Não tem uma conta?<a href="cadastro.php"> Cadastre-se</a></h1>
        </div>
      </div> 
</body>
</html>