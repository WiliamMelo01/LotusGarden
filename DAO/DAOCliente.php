<?php
require_once 'Conexao.php';
require_once(__DIR__ . '/../model/Cliente.php');

session_start();
class DAOCliente
{

    public static function cadastrar($Cliente)
    {
        $conexao = Conexao::conectar();

        $sqlQUery = "INSERT INTO tbcliente (nomeCliente,cpfCliente,emailCliente,senhaCliente) values (:nome,:cpf,:email,:senha)";

        $stmt = $conexao->prepare($sqlQUery);

        $stmt->bindValue(':nome', $Cliente->getNomeCliente());
        $stmt->bindValue(':cpf', $Cliente->getcpfCliente());
        $stmt->bindValue(':email', $Cliente->getEmailCliente());
        $stmt->bindValue(':senha', $Cliente->getSenhaCliente());

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function editar($cliente)
    {
    }

    public static function excluir($cliente)
    {
    }

    public static function listar()
    {
        $conexao = Conexao::conectar();

        $sqlQuery = 'SELECT * FROM 4184430_lotusgarden.tbcliente';

        $stmt = $conexao->query($sqlQuery);

        $lista = $stmt->fetchAll();

        return $lista;
    }

    public static function verificarCpfDuplicado($Cliente)
    {

        $conexao = Conexao::conectar();

        $sqlQuery = "SELECT * FROM 4184430_lotusgarden.tbcliente WHERE cpfCliente LIKE :cpf";

        $stmt = $conexao->prepare($sqlQuery);

        $stmt->bindValue(':cpf', $Cliente->getCpfCliente());

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            //JÁ existe a CPF no banco de dados
            return true;
        } else {
            //NÃO existe a CPF no banco de dados
            return false;
        }
    }

    public static function verificarEmailDuplicado($Cliente)
    {

        $conexao = Conexao::conectar();

        $sqlQuery = "SELECT * FROM 4184430_lotusgarden.tbcliente WHERE emailCliente LIKE :email";

        $stmt = $conexao->prepare($sqlQuery);

        $stmt->bindValue(':email', $Cliente->getEmailCliente());

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            //JÁ existe a Email no banco de dados
            return true;
        } else {
            //NÃO existe a Email no banco de dados
            return false;
        }
    }

    public static function buscaEmailESenha($Cliente)
    {
        $conexao = Conexao::conectar();

        $sqlQuery = "SELECT * FROM 4184430_lotusgarden.tbcliente 
        WHERE emailCliente LIKE '" . $Cliente->getEmailCliente() . "' AND senhaCliente LIKE '" . $Cliente->getSenhaCliente() . "'";

        $stmt = $conexao->query($sqlQuery)->fetch();

        $emailAndPasswordIsCorrect = $stmt != false;
        if ($emailAndPasswordIsCorrect) {
            $_SESSION['usuarioLogado'] = $Cliente->getEmailCliente();
            $_SESSION['idcliente'] = $stmt['idCliente'];
            header('Location:area-restrita/usuario/Home.php');
        } else {
            $_SESSION['loginUsuarioInvalido'] = uniqid();
            header("Location:login.php");
        }
    }

    public static function countUsers()
    {

        $conexao = Conexao::conectar();

        $sqlQuery = 'SELECT COUNT(idCliente) as "clientes" FROM 4184430_lotusgarden.tbcliente';

        $stmt = $conexao->query($sqlQuery);

        $resultado = $stmt->fetch();

        return $resultado;
    }
}
