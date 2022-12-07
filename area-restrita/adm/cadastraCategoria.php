<?php
if (!isset($_POST['categoria'])) {
    header('Location:./aminMenu.php');
} else {

    session_start();
    header('Location:categories.php');

    require_once '../../DAO/DAOCategoria.php';
    require_once '../../model/Categoria.php';
    require_once '../../Controller/ControllerCategoria.php';

    $Categoria = new Categoria();

    $Categoria->setNomeCategoria(strtoupper($_POST['categoria']));

    $ControllerCategoria = new ControllerCategoria();

    $ControllerCategoria->verificaDuplicatas($Categoria->getNomeCategoria());

    if (isset($_SESSION['CategoriaJaExite'])) {
        return null;
    } else {
        DAOCategoria::cadastrar($Categoria);
    }
}
