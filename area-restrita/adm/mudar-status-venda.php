<?php

require_once(__DIR__ .'/../../model/Venda.php');
require_once(__DIR__ .'/../../DAO/DAOVenda.php');

if (isset($_POST['user'])) {
    header("Location: ../usuario/minhasCompras.php");
} else {
    header("Location: vendas.php");
}


$venda = new Venda();
$venda->setId($_POST['idvendaModal']);
$venda->setStatus($_POST['status']);

DAOVenda::atualizarStatus($venda);
