<?php
include 'config.php';
include 'User.php';


$user = new User($conn);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];
    $genero = $_POST['genero'];
    $tipoUsu = $_POST['tipoUsu'];

    $user->register($nomeFull, $nomeUsu, $senha, $confirmarSenha, $genero, $tipoUsu);
    header("refresh:1;url=login.php");


}
?>