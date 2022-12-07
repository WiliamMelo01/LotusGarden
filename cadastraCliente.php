<?php
session_start();
if (!isset($_POST['nome'])) {
    header('Location:index.php');
} else {
    header('Location:cadastro.php');

    require_once 'DAO/DAOCliente.php';
    require_once 'model/Cliente.php';
    require_once 'Controller/ControllerCliente.php';

    $ControllerCliente = new ControllerCliente();

    $Cliente = new Cliente();
    $Cliente->setNomeCliente($_POST['nome']);
    $Cliente->setEmailCliente($_POST['email']);
    $Cliente->setCpfCliente($_POST['cpf']);
    $Cliente->setSenhaCliente($_POST['senha']);
    // $Cliente->setSenhaCliente($ControllerCliente->criptografarSenha($Cliente));

    if (DAOCliente::verificarCpfDuplicado($Cliente)) {
        $_SESSION['cpfDuplicado'] = uniqid();
    } else {
        if (DAOCliente::verificarEmailDuplicado($Cliente)) {
            $_SESSION['emailDuplicado'] = uniqid();
        } else {
            if ($ControllerCliente->verificarCpfValido($Cliente)) {
                if (DAOCliente::cadastrar($Cliente)) {
                    $_SESSION['CadastroComSucesso'] = uniqid();
                } else {
                    $_SESSION['CadastroComFalha'] = uniqid();
                }
            } else {
                $_SESSION['cpfInvalido'] = uniqid();
            }
        }
    }
}
