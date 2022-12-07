<?php
session_start();

$adm = $_POST["email"];
$senha = $_POST["senha"];

if ($adm != 'adm' || $senha != '123') {
    header('Location:../../admlogin.php');
    $_SESSION['dadosInvalidos'] = uniqid();
} else {
    header('Location:./adminMenu.php');
    $_SESSION['logado'] = uniqid();
}
