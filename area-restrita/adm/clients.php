<?php
// require_once '../../Controller/ControllerCliente.php';
require_once '../../DAO/DAOCliente.php';
if (!isset($_SESSION['logado'])) {
    Header('Location:../../admlogin.php');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotus garden - Clients</title>

    <script src="https://kit.fontawesome.com/88b536a571.js" crossorigin="anonymous"></script>

    <!-- CSS GLOBAL -->
    <link rel="stylesheet" href="../.././css/adminGlobal.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/client.css">

</head>

<body>
    <div class="sidebar active">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">
                    <a href="./adminMenu.php">Lotus Garden</a>
                </div>
            </div>
            <i class="fa-solid fa-bars" id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="#">
                    <i class="fa-solid fa-magnifying-glass" id="search_icon"></i>
                    <input type=" text" placeholder="Search">
                </a>
                <span class="tolltip">Procurar</span>
            </li>
            <li>
                <a href="./dashboard.php" id="linkDashboard">
                    <img src="../.././images/dashboard.webP" alt="" id="dashboard">
                    <span class="links_name">Dashborad</span>
                </a>
                <span class="tolltip">Dashborad</span>
            </li>
            <li>
                <a href="./categories.php" id="linkCategories">
                    <img src="../.././images/categories.webP" alt="" id="categories">
                    <span class="links_name">Categorias</span>
                </a>
                <span class="tolltip">Categorias</span>
            </li>
            <li>
                <a href="./products.php">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <span class="links_name">Produtos</span>
                </a>
                <span class="tolltip">Produtos</span>
            </li>
            <li>
                <a href="./clients.php">
                    <i class="fa-solid fa-user"></i>
                    <span class="links_name">Clientes</span>
                </a>
                <span class="tolltip">Clientes</span>
            </li>
            <li>
                <a href="vendas.php">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span class="links_name">Vendas</span>
                </a>
                <span class="tolltip">Vendas</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span class="links_name">Configurações</span>
                </a>
                <span class="tolltip">Configurações</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="../.././images/userIcon.webP" alt="" id="userIcon">
                    <div class="name">
                        ADMIN
                    </div>
                </div>

                <a href="./logout.php" target="_self">
                    <i class="fa-solid fa-arrow-right-from-bracket" id="logout">
                    </i>
                </a>

            </div>
        </div>
    </div>
    <main>
        <div class="container">

            <h1>Lista de usuarios</h1>

            <div class="fixTableHead">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>E-mail</th>
                            <th>Logradouro</th>
                            <th>Número</th>
                            <th>Complementto</th>
                            <th>Cidade</th>
                            <th>CEP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $clientes = DAOCliente::listar();

                        foreach ($clientes as $cliente) {
                            echo ('
                                <tr>
                                <td>' . $cliente['nomeCliente'] . '</td>
                                <td>' . $cliente['cpfCliente'] . '</td>
                                <td>' . $cliente['emailCliente'] . '</td>
                                <td>' . $cliente['logradouroCliente'] . '</td>
                                <td>' . $cliente['numLogCliente'] . '</td>
                                <td>' . $cliente['compCliente'] . '</td>
                                <td>' . $cliente['cidadeCliente'] . '</td>
                                <td>' . $cliente['cepCliente'] . '</td>
                                </tr>
                            ');
                        }
                        ?>
                    </tbody>

                </table>

            </div>
    </main>

    <script>
        const linkDashboard = document.querySelector('#linkDashboard')
        const linkCategories = document.querySelector('#linkCategories')
        const imgDashboard = document.querySelector('#dashboard')
        const imgCategories = document.querySelector('#categories')

        linkDashboard.addEventListener('mouseover', () => {
            imgDashboard.setAttribute('src', '../../images/dashboard-black.png')

        })

        linkDashboard.addEventListener('mouseout', () => {
            imgDashboard.setAttribute('src', '../.././images/dashboard.png')

        })

        linkCategories.addEventListener('mouseover', () => {
            imgCategories.setAttribute('src', '../../images/categories-black.png')

        })

        linkCategories.addEventListener('mouseout', () => {
            imgCategories.setAttribute('src', '../../images/categories.png')
        })
    </script>
    <script src="../.././js/menu.js"></script>

</body>

</html>