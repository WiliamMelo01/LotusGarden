<?php

if (!isset($_SESSION['logado'])) {

    header('Location:../.././admlogin.php');
}
