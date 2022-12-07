<?php
session_start();
if (!isset($_SESSION['logado'])) {

    header('Location:../.././admlogin.php');
}

require_once(__DIR__ .'/../../DAO/DAOItemVenda.php');
require_once(__DIR__ .'/../../DAO/DAOCliente.php');
require_once(__DIR__ .'/../../DAO/DAOVenda.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dashboard">
    <title>Lotus garden - Menu admin</title>

    <script src="https://kit.fontawesome.com/88b536a571.js" crossorigin="anonymous"></script>
    <!-- CSS GLOBAL -->
    <link rel="stylesheet" href="../.././css/adminGlobal.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../.././css/dashboard.css">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/88b536a571.js" crossorigin="anonymous"></script>
    <!-- CHART JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                    <input type=" text" placeholder="Buscar">
                </a>
                <span class="tolltip">Buscar</span>
            </li>
            <li>
                <a href="#" id="linkDashboard" style="background:#FFF">
                    <img src="../.././images/dashboard-black.webP" alt="" id="dashboard">
                    <span class="links_name" style="color:black">Dashborad</span>
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

                <a href="./logout.php" target="_self" alt="logout" name="logout">
                    <i class="fa-solid fa-arrow-right-from-bracket" id="logout">
                    </i>
                </a>

            </div>
        </div>
    </div>

    <main>
        <div class="first-info">
            <div class="intial-info lucro-total">
                <span class="title">Total de usuarios</span>
                <span class="amount money">
                    <?php
                    $usuarios = DAOCliente::countUsers();
                    echo $usuarios['clientes'];
                    ?>
                </span>
            </div>
            <div class="intial-info total-visitantes">
                <span class="title">Total de vendas</span>
                <span class="amount visualizacoes">
                    <?php
                    $vendas = DAOVenda::contarVendas();
                    echo $vendas['vendas'];
                    ?>
                </span>
            </div>
            <div class="intial-info total-vendas">
                <span class="title">Lucro total</span>
                <span class="amount sales">R$
                    <?php
                    $valorTotalVendas = DAOVenda::contarValorTotalVendas();
                    echo $valorTotalVendas['valorTotalVendas'];
                    ?>
                </span>
            </div>
        </div>

        <div class="charts">
            <div class="chart-sales">
                <canvas id="chart-sales"></canvas>
            </div>
            <div class="chart-categories">
                <canvas id="chart-categories"></canvas>
            </div>
        </div>

        <div class="last-sales">
            <h2>Ultimas vendas</h2>
            <table>
                <thead>
                    <tr>
                        <th class="id">#</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Data</th>
                        <th>Comprador</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $ultimasVendas =  DAOItemVenda::ultimasVendas();

                    foreach ($ultimasVendas as $venda) {
                        echo '
                        <tr>
                        <td class="id">' . $venda['idItemVenda'] . '</td>
                        <td>' . $venda['nomeProduto'] . '</td>
                        <td>' . $venda['qtdeItemVenda'] . '</td>
                        <td>R$ ' . $venda['subTotalItemVenda'] . '</td>
                        <td>' . $venda['dataVenda'] . '</td>
                        <td>' . $venda['nomeCliente'] . '</td>
                    </tr>
                        ';
                    }
                    ?>
                </tbody>
            </table>

        </div>


    </main>
    <script src="../.././js/menu.js"></script>
    <script src="../../js/chart-sales.js"></script>
    <script src="../../js/chart-categories.js"></script>
    <script>
        const linkDashboard = document.querySelector('#linkDashboard')
        const linkCategories = document.querySelector('#linkCategories')
        const imgCategories = document.querySelector('#categories')

        linkCategories.addEventListener('mouseover', () => {
            imgCategories.setAttribute('src', '../../images/categories-black.png')

        })

        linkCategories.addEventListener('mouseout', () => {
            imgCategories.setAttribute('src', '../../images/categories.png')
        })
    </script>



</body>

</html>