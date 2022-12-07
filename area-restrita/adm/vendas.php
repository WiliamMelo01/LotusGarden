<?php
require_once __DIR__ . '/../../DAO/DAOVenda.php';
require_once __DIR__ . '/../../DAO/DAOItemVenda.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS GLOBAL -->
    <link rel="stylesheet" href="../.././css/adminGlobal.css">
    <script src="https://kit.fontawesome.com/88b536a571.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/vendas.css">
    <title>Lotus Garden - Vendas</title>
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
                <a href="#" id="linkCategories">
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
                <a href="vendas.php" style="background:#FFF;color:#000">
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
        <div class="container-fluid">

            <h1>Vendas</h1>
            <?php
            try {
                $listavenda = DAOVenda::listar();
                $qtdePedido = DAOVenda::contarPedido();
                $listaitens = DAOItemVenda::listar();
            } catch (Exception $e) {
                echo '<pre>';
                print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
            ?>
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Data da Venda</th>
                            <th scope="col">Valor Total</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Status</th>
                            <th scope="col">Atualizar status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listavenda as $venda) {
                            switch ($venda['statusvenda']) {
                                case 1:
                                    $status = 'Pedido pelo cliente';
                                    break;
                                case 2:
                                    $status = 'Confirmado pela loja';
                                    break;
                                case 3:
                                    $status = 'Cancelado pelo cliente';
                                    break;
                                case 4:
                                    $status = 'Cancelado pela loja – falta de estoque';
                                    break;
                                case 5:
                                    $status = 'Venda finalizada – produtos enviados';
                                    break;
                            }
                        ?>
                            <tr>
                                <th scope="row"><?php echo $venda['idvenda']; ?></th>
                                <td><?php echo $venda['datavenda']; ?></td>
                                <td>R$ <?php echo number_format($venda['valortotalvenda'], 2, ',', '.'); ?></td>
                                <td><?php echo $venda['nomecliente']; ?></td>
                                <td><?php echo $status; ?></td>
                                <?php
                                switch ($venda['statusvenda']) {
                                    case 1:
                                    case 2:
                                ?>
                                        <td><a data-toggle="modal" data-target="#modalStatusVenda" class="btn btn-primary" onclick="enviarIdVenda('<?php echo $venda['idvenda']; ?>')">Mudar Status</a></td>
                                <?php
                                        break;
                                    case 3:
                                    case 4:
                                    case 5:
                                        echo ("<td></td>");
                                        break;
                                }
                                ?>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
        </div>
    </main>


    <!-- MODAL MUDANÇA DE STATUS DA VENDA -->
    <div class="modal fade" id="modalStatusVenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Atualizar Status da Venda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="mudar-status-venda.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                IdVenda:
                                <input type="text" id="idvendaModal" name="idvendaModal" readonly>
                                <br>
                                Status da venda:
                                <select id="status" name="status" class="form-control">
                                    <!-- <option value="1">Pedido pelo cliente</option> -->
                                    <option value="2">Confirmado pela loja</option>
                                    <!-- <option value="3">Cancelado pelo cliente</option> -->
                                    <option value="4">Cancelado pela loja – falta de estoque</option>
                                    <option value="5">Venda finalizada – produtos enviados</option>
                                </select>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" value="Alterar">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
    <script>
        function enviarIdVenda(valor) {
            document.getElementById('idvendaModal').value = valor;
        }

        function verItemVenda(valor) {
            document.getElementById('idvenda').innerHTML = valor;

        }
    </script>

</body>

</html>