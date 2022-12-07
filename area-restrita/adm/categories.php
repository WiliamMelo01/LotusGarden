<?php
require_once '../../DAO/DAOCategoria.php';
session_start();
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
    <title>Lotus garden - Categorias</title>

    <script src="https://kit.fontawesome.com/88b536a571.js" crossorigin="anonymous"></script>

    <!-- CSS GLOBAL -->
    <link rel="stylesheet" href="../.././css/adminGlobal.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/categories.css">
    <!-- TOASTR -->
    <link href="../../css/toastr.min.css" rel="stylesheet" />
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
                <span class="tolltip">Search</span>
            </li>
            <li>
                <a href="./dashboard.php" id="linkDashboard">
                    <img src="../.././images/dashboard.webP" alt="" id="dashboard">
                    <span class="links_name">Dashborad</span>
                </a>
                <span class="tolltip">Dashborad</span>
            </li>
            <li>
                <a href="#" id="linkCategories" style="background:#FFF">
                    <img src="../.././images/categories-black.webP" alt="" id="categories">
                    <span class="links_name" style="color:black">Categorias</span>
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
        <form action="./cadastraCategoria.php" method="post">
            <h1>Cadastrar nova Categoria</h1>

            <label for="categoria">
                <input autofocus placeholder="Nome da categoria" required type="text" name="categoria" id="categoria">
            </label>
            <div class="btnFormWrapper">

                <input type="submit" value="Cadastrar" id="btnSubmit" class="btnForm">
                <input type="reset" value="Limpar" id="btnReset" class="btnForm">
            </div>
        </form>
        <div class="fixTableHead">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $categorias = DAOCategoria::listar();

                    foreach ($categorias as $categoria) {
                        echo ('
                               <tr>
                                   <td> ' . $categoria['idCategoria'] . ' </td>
                                   <td> ' . $categoria['nomeCategoria'] . ' </td>
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
            imgDashboard.setAttribute('src', '../.././images/dashboard-black.png')

        })

        linkDashboard.addEventListener('mouseout', () => {
            imgDashboard.setAttribute('src', '../.././images/dashboard.png')

        })
    </script>
    <script src="../.././js/menu.js"></script>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- TOAST -->
    <script src="../../js/toastr.min.js"></script>
    <script src="../../js/toastNotifications.js"></script>
    <script src="../../js/toastErrorNotification.js"></script>

    <?php
    if (isset($_SESSION['CategoriaCadastroComSucesso'])) :
    ?>
        <script>
            toastSuccess('Sucesso', 'Categoria Cadastrada com sucesso. :)')
        </script>
    <?php
    endif;
    unset($_SESSION['CategoriaCadastroComSucesso']);
    ?>

    <?php
    if (isset($_SESSION['CategoriaCadastroComFalha'])) :
    ?>
        <script>
            toastError('Falha', 'Ocorreu uma falha ao cadastrar.')
        </script>
    <?php
    endif;
    unset($_SESSION['CategoriaCadastroComFalha']);
    ?>
    <?php
    if (isset($_SESSION['CategoriaJaExite'])) :
    ?>
        <script>
            toastError('Falha', 'Esta categoria ja esta cadastrada!')
        </script>
    <?php
    endif;
    unset($_SESSION['CategoriaJaExite']);
    ?>
</body>

</html>