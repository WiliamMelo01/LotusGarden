<?php

require_once '../../model/Cliente.php';
require_once '../../model/Venda.php';
require_once '../../DAO/DAOVenda.php';
require_once '../../DAO/DAOItemVenda.php';

session_start();

if (isset($_COOKIE["carrinho"])) {
    $carrinhorecebido =  $_COOKIE["carrinho"];
    $carrinhoAtual = unserialize($carrinhorecebido);

    $cliente = new Cliente();
    $cliente->setIdCliente($_SESSION['idcliente']);
    $venda = new Venda();
    $venda->setCliente($cliente);
    $venda->setData(date('Y-m-d'));
    $venda->setListaItem($carrinhoAtual);
    $venda->setStatus(1);
    $venda->setValorTotal($_GET['valortotal']);

    DAOVenda::cadastrar($venda);

    $venda->setId(DAOVenda::consultarId($venda));

    foreach ($venda->getListaItem() as $itemvenda) {
        DAOItemVenda::cadastrar($itemvenda, $venda->getId());
    }

    unset($_COOKIE['carrinho']);
    setcookie('carrinho', null);
    header("Location: Home.php");
} else {
    header("Location: Home.php");
}
