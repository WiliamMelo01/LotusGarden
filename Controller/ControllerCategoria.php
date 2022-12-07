<?php
session_start();
require_once '../../DAO/DAOCategoria.php';

class ControllerCategoria
{

    public function verificaDuplicatas($nomeCategoria)
    {

        if (DAOCategoria::verificarDuplicatas($nomeCategoria)) {
            $_SESSION['CategoriaJaExite'] = uniqid();
        }
    }
}
