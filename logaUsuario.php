<?php

require_once 'model/Cliente.php';
require_once 'DAO/DAOCliente.php';

if (!isset($_POST['email'])) {
    header("Location:login.php");
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$Cliente = new Cliente();
$Cliente->setEmailCliente($email);
$Cliente->setSenhaCliente($senha);

DAOCliente::buscaEmailESenha($Cliente);


