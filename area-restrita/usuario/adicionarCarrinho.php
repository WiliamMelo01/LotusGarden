<?php

require_once '../../model/ItemVenda.php';
require_once '../../model/Produto.php';
require_once '../../DAO/DAOProduto.php';

if (isset($_GET['promocao'])) {
    header("Location:Home.php#menu");
} else {
    header("Location:produtos.php#products");
}


$produto = new Produto();
$produto->setIdProduto($_GET['idproduto']);
$produto = DAOProduto::consultarDados($produto);

$item = new ItemVenda();
$item->setQtde(1);
$item->setProduto($produto);
$item->setSubtotal($item->getQtde() * $item->getProduto()->getPrecoProduto());
$item->setId(uniqid());

if (isset($_COOKIE["carrinho"])) {
    $carrinhorecebido =  $_COOKIE["carrinho"];
    $carrinhoAtual = unserialize($carrinhorecebido);

    $id =  $produto->getIdProduto();

    foreach ($carrinhoAtual as $itemCarrinho) {

        if ($itemCarrinho->getProduto()->getIdProduto() == $id) {
            $itemCarrinho->setQtde($itemCarrinho->getQtde() + 1);
            $itemCarrinho->setSubtotal($itemCarrinho->getQtde() * $itemCarrinho->getProduto()->getPrecoProduto());

            $key = array_search($itemCarrinho, $carrinhoAtual);

            unset($carrinhoAtual[$key]);

            $carrinhoAtual[] = $itemCarrinho;
            $carrinhocookie = serialize($carrinhoAtual);
            setcookie('carrinho', $carrinhocookie);

            echo "<pre>";
            echo var_dump(unserialize($_COOKIE["carrinho"]));
            echo "</pre>";

            return;
        }
    }

    $carrinhoAtual[] = $item;
    $carrinhocookie = serialize($carrinhoAtual);
    setcookie('carrinho', $carrinhocookie);

    echo "<pre>";
    echo var_dump(unserialize($_COOKIE["carrinho"]));
    echo "</pre>";
} else {
    $carrinho = array();

    $carrinho[] = $item;

    $carrinhocookie = serialize($carrinho);
    setcookie('carrinho', $carrinhocookie);
}
