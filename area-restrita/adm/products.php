<?php
session_start();
require_once '../../DAO/DAOCategoria.php';
require_once '../../DAO/DAOProduto.php';
if (!isset($_SESSION['logado'])) {

    header('Location:../.././admlogin.php');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotus garden - Menu admin</title>

    <script src="https://kit.fontawesome.com/88b536a571.js" crossorigin="anonymous"></script>

    <!-- CSS GLOBAL -->
    <link rel="stylesheet" href="../.././css/adminGlobal.css">
    <!-- PRODUCTS CSS -->
    <link rel="stylesheet" href="../.././css/products.css">
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
                <span class="tolltip">Buscar</span>
            </li>
            <li>
                <a href="./dashboard.php" id="linkDashboard">
                    <img src="../../images/dashboard.webP" alt="Icone de dashboard" id="dashboard">
                    <span class="links_name">Dashborad</span>
                </a>
                <span class="tolltip">Dashborad</span>
            </li>
            <li>
                <a href="./categories.php" id="linkCategories">
                    <img src="../../images/categories.webP" alt="Icone de categorias" id="categories">
                    <span class="links_name">Categorias</span>
                </a>
                <span class="tolltip">Categorias</span>
            </li>
            <li>
                <a href="./products.php" style="background:#FFF">
                    <i class="fa-solid fa-boxes-stacked" style="color:black"></i>
                    <span class="links_name" style="color:black">Products</span>
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
            <form action="./cadastraProduto.php" enctype="multipart/form-data" method="post">
                <h1>Cadastrar novo produto</h1>

                <label for="nome">
                    <input placeholder="Nome do produto" required type="text" name="nome" id="nome">
                </label>
                <label for="preco">
                    <input placeholder="Preço do produto" required type="text" name="preco" id="preco" autocomplete="off">
                    <div class="rs">RS</div>
                    </input>
                </label>
                <label for="categoria" id="labelCategoria">
                    <span>Categoria</span>
                    <select required name="categoria" id="categoria">
                        <option selected disabled>SELECIONE </option>
                        <?php
                        $categorias = DAOCategoria::listar();

                        foreach ($categorias as $categoria) {
                            echo ('
                                 <option value="' . $categoria['idCategoria'] . '">' . $categoria['nomeCategoria'] . '</option>
                             ');
                        }
                        ?>
                    </select>
                </label>
                <label for="imagem">
                    <span id="imageBtn">Escolher imagem</span>
                </label>
                <input required type="file" name="imagem" id="imagem" accept="images/*">
                <div class="btnFormWrapper">

                    <input type="submit" value="Cadastrar" id="btnSubmit" class="btnForm">
                    <input type="reset" value="Limpar" id="btnReset" class="btnForm">
                </div>
            </form>
            <img src="" alt="Product Preview" id="imagemProduto">
        </div>
        <div class="fixTableHead">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Categoria</th>
                        <th>Imagem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $produtos = DAOProduto::listar();

                    foreach ($produtos as $produto) {
                        $categoria = DAOCategoria::listarPorId($produto['idCategoria']);
                        echo ('
                                  <tr>
                                      <td>' . $produto['nomeProduto'] . '</td>
                                      <td>R$ ' . number_format($produto['precoProduto'], 2, ',', '.') . '</td>
                                      <td>' . $categoria . '</td>
                                      <td> <a href="../../' . $produto['imagem'] . '" target="_blank" >Ver imagem</a> </td>
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
            imgDashboard.setAttribute('src', '../../images/dashboard-black.webP')

        })

        linkDashboard.addEventListener('mouseout', () => {
            imgDashboard.setAttribute('src', '../.././images/dashboard.webP')
        })

        linkCategories.addEventListener('mouseover', () => {
            imgCategories.setAttribute('src', '../../images/categories-black.webP')

        })

        linkCategories.addEventListener('mouseout', () => {
            imgCategories.setAttribute('src', '../../images/categories.webP')
        })
    </script>
    <script src="../.././js/menu.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../js/jquery.mask.js"></script>
    <script src="../../js/previewImagemProduto.js"></script>
    <script>
        $(document).ready(function() {
            $('#preco').mask('000.000.000.000.000,00', {
                reverse: true
            });
        })
    </script>
    <!-- TOAST -->
    <script src="../../js/toastr.min.js"></script>
    <script src="../../js/toastNotifications.js"></script>
    <script src="../../js/toastErrorNotification.js"></script>
    <?php
    if (isset($_SESSION['produtoCadastrado'])) :
    ?>
        <script>
            toastSuccess('Sucesso', 'ProdutoCadastrado Cadastrada com sucesso. :)')
        </script>
    <?php
    endif;
    unset($_SESSION['produtoCadastrado']);
    ?>

    <?php
    if (isset($_SESSION['produtoNaoCadastrado'])) :
    ?>
        <script>
            toastError('Falha', 'Ocorreu uma falha ao cadastrar.')
        </script>
    <?php
    endif;
    unset($_SESSION['produtoNaoCadastrado']);
    ?>

</body>

</html>