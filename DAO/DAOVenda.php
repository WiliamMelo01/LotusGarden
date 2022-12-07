<?php
require_once 'Conexao.php';
require_once '../../model/Cliente.php';

class DAOVenda
{

    public static function cadastrar($venda)
    {
        $conexao = Conexao::conectar();

        $queryInsert = "INSERT INTO tbvenda(datavenda, valortotalvenda, statusvenda, idcliente)
                             VALUES(?,?,?,?)";

        $prepareStatement = $conexao->prepare($queryInsert);

        $prepareStatement->bindValue(1, $venda->getData());
        $prepareStatement->bindValue(2, $venda->getValorTotal());
        $prepareStatement->bindValue(3, $venda->getStatus());
        $prepareStatement->bindValue(4, $venda->getCliente()->getIdCliente());

        $prepareStatement->execute();
        return 'Cadastrou';
    }

    public static function consultarId($venda)
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT MAX(idvenda) AS maior FROM tbvenda";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        foreach ($lista as $venda)
            return $venda['maior'];
    }

    public static function listar()
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idvenda, DATE_FORMAT(datavenda, '%d/%m/%Y') AS datavenda, 
                            valortotalvenda, statusvenda, v.idcliente, nomecliente 
                            FROM tbvenda v INNER JOIN tbcliente c 
                            ON v.idcliente = c.idcliente 
                            ORDER BY datavenda DESC";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public static function contar()
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT COUNT(idvenda) AS qtde FROM tbvenda";
        $resultado = $conexao->query($querySelect);
        $num = $resultado->fetchAll();
        foreach ($num as $n)
            return $n['qtde'];
    }

    public static function contarClienteVenda()
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idcliente, COUNT(idvenda) AS qtde FROM tbvenda GROUP BY idcliente ORDER BY qtde DESC";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        foreach ($lista as $cliente)
            return $cliente['idcliente'];
    }

    public static function atualizarStatus($venda)
    {
        $conexao = Conexao::conectar();

        $queryInsert = "UPDATE tbvenda 
                            SET statusvenda = ?
                            WHERE idvenda = ?";

        $prepareStatement = $conexao->prepare($queryInsert);

        $prepareStatement->bindValue(1, $venda->getStatus());
        $prepareStatement->bindValue(2, $venda->getId());

        $prepareStatement->execute();
        return 'Atualizou';
    }

    public static function contarPedido()
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT COUNT(idvenda) AS qtde FROM tbvenda WHERE statusvenda = 1";
        $resultado = $conexao->query($querySelect);
        $num = $resultado->fetchAll();
        foreach ($num as $n)
            return $n['qtde'];
    }

    public static function listarPorCliente($cliente)
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idvenda, DATE_FORMAT(datavenda, '%d/%m/%Y') AS datavenda, 
                            valortotalvenda, statusvenda, v.idcliente, nomecliente 
                            FROM tbvenda v INNER JOIN tbcliente c 
                            ON v.idcliente = c.idcliente 
                            WHERE v.idcliente = " . $cliente->getIdCliente() . "
                            ORDER BY datavenda DESC,statusVenda ASC";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public static function contarVendas()
    {
        $conexao = Conexao::conectar();

        $sqlQuery = 'SELECT COUNT(idVenda) as "vendas" FROM tbvenda';

        $stmt = $conexao->query($sqlQuery);

        $resultado = $stmt->fetch();

        return $resultado;
    }

    public static function contarValorTotalVendas()
    {
        $conexao = Conexao::conectar();

        $sqlQuery = 'SELECT SUM(valorTotalVenda) as "valorTotalVendas" FROM tbvenda';

        $stmt = $conexao->query($sqlQuery);

        $resultado = $stmt->fetch();

        return $resultado;
    }
}
