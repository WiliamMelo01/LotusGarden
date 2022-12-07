<?php

session_start();
header('Location:../../admLogin.php');

unset($_SESSION['logado']);
session_destroy($_SESSION['logado']);
