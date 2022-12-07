<?php

require_once "Conexao.php";

class DAOProduto
{

    public static function cadastrar($produto)
    {
        $conexao = Conexao::conectar();

        $sqlQuery = "INSERT INTO 4184430_lotusgarden.tbproduto (nomeProduto,precoProduto,idCategoria) VALUES (:nomeProduto,:precoProduto,:idCategoria)";

        $stmt = $conexao->prepare($sqlQuery);

        $stmt->bindValue(':nomeProduto', $produto->getNomeProduto());
        $stmt->bindValue(':precoProduto', $produto->getPrecoProduto());
        $stmt->bindValue(':idCategoria', $produto->getCategoria()->getIdCategoria());

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function editar($produto)
    {
    }

    public static function excluir($produto)
    {
    }

    public static function listar()
    {
        $conexao = Conexao::conectar();

        $sqlQuery = "SELECT * FROM 4184430_lotusgarden.tbproduto";

        $stmt = $conexao->query($sqlQuery)->fetchAll(PDO::FETCH_ASSOC);

        return $stmt;
    }

    public static function listarPromocoes()
    {
        $conexao = Conexao::conectar();

        $sqlQuery = "SELECT * FROM 4184430_lotusgarden.tbproduto WHERE promocao = 1";

        $stmt = $conexao->query($sqlQuery)->fetchAll(PDO::FETCH_ASSOC);

        return $stmt;
    }

    public static function buscarId($produto)
    {
        $conexao = Conexao::conectar();

        $sqlQuery = "SELECT idProduto FROM 4184430_lotusgarden.tbproduto WHERE nomeProduto LIKE :nomeProduto";

        $stmt = $conexao->prepare($sqlQuery);

        $stmt->bindValue(':nomeProduto', $produto->getNomeProduto());

        $stmt->execute();

        foreach ($stmt as $produto) {
            $id = $produto['idProduto'];
        }

        return $id;
    }

    public static function atualizaImagem($produto)
    {

        $conexao = Conexao::conectar();

        $sqlQuery = "UPDATE 4184430_lotusgarden.tbproduto SET imagem = :imagem WHERE nomeProduto LIKE :nomeProduto";

        $stmt = $conexao->prepare($sqlQuery);

        $stmt->bindValue(":imagem", $produto->getImagem());
        $stmt->bindValue(":nomeProduto", $produto->getNomeProduto());

        $stmt->execute();
    }

    public static function consultarDados($produto)
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT nomeProduto, precoProduto, imagem FROM 4184430_lotusgarden.tbproduto WHERE idProduto = " . $produto->getIdProduto();
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        foreach ($lista as $p) {
            $produto->setNomeProduto($p['nomeProduto']);
            $produto->setPrecoProduto($p['precoProduto']);
            $produto->setImagem($p['imagem']);
        }
        return $produto;
    }
}
