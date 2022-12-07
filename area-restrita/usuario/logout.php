<?php
session_start();
unset($_SESSION['usuarioLogado']);
unset($_SESSION['idcliente']);

header('Location:../../login.php');
