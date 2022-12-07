<?php
require_once 'Conexao.php';

class DAOItemVenda
{

    public static function cadastrar($item, $idvenda)
    {
        $conexao = Conexao::conectar();

        $queryInsert = "INSERT INTO 4184430_lotusgarden.tbitemvenda(idvenda, idproduto, qtdeitemvenda, subtotalitemvenda)
                             VALUES(?,?,?,?)";

        $prepareStatement = $conexao->prepare($queryInsert);

        $prepareStatement->bindValue(1, $idvenda);
        $prepareStatement->bindValue(2, $item->getProduto()->getIdProduto());
        $prepareStatement->bindValue(3, $item->getQtde());
        $prepareStatement->bindValue(4, $item->getSubTotal());

        $prepareStatement->execute();
        return 'Cadastrou';
    }

    public static function listar()
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idvenda, idproduto, qtdeitemvenda, subtotalitemvenda FROM 4184430_lotusgarden.tbitemvenda";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public static function contar()
    {
        // $conexao = Conexao::conectar();
        // $querySelect = "SELECT COUNT(idcliente) AS qtde FROM tbcliente";
        // $resultado = $conexao->query($querySelect);
        // $num = $resultado->fetchAll();
        // foreach ($num as $n)
        //     return $n['qtde'];   
    }

    public static function contarProdutoVenda()
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idproduto, COUNT(iditemvenda) AS qtde FROM 4184430_lotusgarden.tbitemvenda GROUP BY idproduto ORDER BY qtde DESC";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        foreach ($lista as $cliente)
            return $cliente['idproduto'];
    }

    public static function ultimasVendas()
    {
        $conexao = Conexao::conectar();

        $sqlQuery = "SELECT idItemVenda,qtdeItemVenda,subTotalItemVenda,nomeProduto, dataVenda,nomeCliente FROM 4184430_lotusgarden.tbitemvenda INNER JOIN tbproduto ON tbitemvenda.idProduto = tbproduto.idProduto INNER JOIN tbvenda ON tbitemvenda.idVenda = tbvenda.idVenda INNER JOIN tbcliente ON tbvenda.idCliente = tbcliente.idCliente
        ORDER BY dataVenda DESC
        LIMIT 5";

        $stmt = $conexao->query($sqlQuery);

        $resultado = $stmt->fetchAll();

        return $resultado;
    }
}
