<?php

require_once '../../model/ItemVenda.php';

if (!isset($_COOKIE['carrinho'])) {
    header("Location:Home.php");
    return;
}

if (isset($_GET['promocao'])) {
    header("Location:Home.php#menu");
} else {
    header("Location:produtos.php#products");
}

$carrinho = unserialize($_COOKIE['carrinho']);

$idItemCarrinho = $_GET['idItemCarrinho'];

foreach ($carrinho as $item) {
    if ($item->getId() == $idItemCarrinho) {

        $index = array_search($item, $carrinho);

        unset($carrinho[$index]);

        setcookie('carrinho', serialize($carrinho));
    }
}
