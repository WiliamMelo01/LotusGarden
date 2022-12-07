<?php
session_start();
if (!isset($_POST['nome'])) {
    header('Location:products.php');
    return;
} else {
    header('Location:products.php');
    require_once '../../model/Categoria.php';
    require_once '../../model/Produto.php';
    require_once '../../DAO/DAOProduto.php';

    $produto = $_POST['nome'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];
    $imagem = $_FILES['imagem']['tmp_name'];
    $nomeImagem = $_FILES['imagem']['name'];
    $formatoImagem = explode(".", $nomeImagem)[1];
    $preco = str_replace('.', '', $preco);
    $preco = str_replace(',', '.', $preco);


    $Categoria = new Categoria();
    $Categoria->setIdCategoria($categoria);

    $Produto = new Produto();
    $Produto->setNomeProduto($produto);
    $Produto->setPrecoProduto($preco);
    $Produto->setCategoria($Categoria);

    if (DAOProduto::cadastrar($Produto)) {
        $Produto->setIdProduto(DAOProduto::buscarId($Produto));

        $arquivo =  $Produto->getIdProduto() . "." . $formatoImagem;

        $Produto->setImagem("images/produtos/" . $arquivo);

        echo ($Produto->getImagem());

        DAOProduto::atualizaImagem($Produto);

        move_uploaded_file($imagem, "../../images/produtos/" . $arquivo);

        $_SESSION['produtoCadastrado'] = uniqid();
    } else {
        $_SESSION['produtoNaoCadastrado'] = uniqid();
    }
}
