<?php
session_start();
include 'config.php';
include 'User.php';

$user = new User($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($user->login($email, $senha)) {
        header("Location: 'portal.php");
        exit();
    } if ($user->login($email, $senha)) {
        header("Location: 'portal.php");
        exit();
    } else {
        echo "Login falhou. Verifique suas credenciais.";
    }
}
?>