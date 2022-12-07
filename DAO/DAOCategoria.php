<?php

require_once 'Conexao.php';
class DAOCategoria
{

    public static function cadastrar($Categoria)
    {
        $conexao = Conexao::conectar();

        $sqlQuery = "INSERT INTO 4184430_lotusgarden.tbcategoria (nomeCategoria) values (:nome)";

        $stmt = $conexao->prepare($sqlQuery);

        $stmt->bindValue(':nome', $Categoria->getNomeCategoria());

        if ($stmt->execute()) {
            $_SESSION['CategoriaCadastroComSucesso'] = uniqid();
        } else {
            $_SESSION['CategoriaCadastroComFalha'] = uniqid();
        }
    }

    public static function editar($categoria)
    {
    }

    public static function excluir($categoria)
    {
    }

    public static function listar()
    {
        $conexao = Conexao::conectar();

        $sqlQuery = "SELECT * FROM 4184430_lotusgarden.tbcategoria ORDER BY nomeCategoria";

        $stmt = $conexao->query($sqlQuery)->fetchAll(PDO::FETCH_ASSOC);

        return $stmt;
    }

    public static function listarPorId($id)
    {
        $conexao = Conexao::conectar();

        $sqlQuery = 'SELECT nomeCategoria FROM 4184430_lotusgarden.tbcategoria WHERE idCategoria = ' . $id;
        foreach ($conexao->query($sqlQuery) as $row) {
            return $row['nomeCategoria'];
        }
    }

    public static function verificarDuplicatas($nomeCategoria)
    {

        $conexao = Conexao::conectar();

        $sqlQuery = "SELECT * FROM 4184430_lotusgarden.tbcategoria WHERE nomeCategoria LIKE :nomeCategoria";

        $stmt = $conexao->prepare($sqlQuery);

        $stmt->bindValue(':nomeCategoria', $nomeCategoria);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            //JÁ existe a categoria no banco de dados
            return true;
        } else {
            //NÃO existe a categoria no banco de dados
            return false;
        }
    }
}
