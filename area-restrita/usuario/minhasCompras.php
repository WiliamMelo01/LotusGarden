<?php
session_start();
if (!isset($_SESSION['usuarioLogado'])) {
    header("Location:../../login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- -->
    <link rel="stylesheet" href="../../css/minhasCompras.css">

    <title>Lotus Garden - Minhas Compras</title>
</head>

<body>
    <div class="container-fluid">
        <h1>Minhas Compras</h1>

        <button>
            <a href="Home.php">Voltar</a>
        </button>

        <?php
        require_once(__DIR__ .'/../../model/Cliente.php');
        require_once(__DIR__ .'/../../DAO/DAOVenda.php');


        try {
            $cliente = new Cliente();
            $cliente->setIdCliente($_SESSION['idcliente']);

            $listavenda = DAOVenda::listarPorCliente($cliente);
        } catch (Exception $e) {
            echo '<pre>';
            print_r($e);
            echo '</pre>';
            echo $e->getMessage();
        }
        ?>
        <div class="col pt-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Data da Venda</th>
                        <th scope="col">Valor Total</th>
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
                            <td><?php echo $status; ?></td>
                            <?php
                            switch ($venda['statusvenda']) {
                                case 1:
                            ?>
                                    <td><a data-toggle="modal" data-target="#modalStatusVenda" class="btn btn-primary" onclick="enviarIdVenda('<?php echo $venda['idvenda']; ?>')">Cancelar compra</a></td>
                            <?php

                                    break;
                                case 2:
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
                    <form action="../adm/mudar-status-venda.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" name="user" value="1">
                                IdVenda:
                                <input type="text" id="idvendaModal" name="idvendaModal" readonly>
                                <br>
                                Status da venda:
                                <select id="status" name="status" class="form-control">
                                    <!-- <option value="1">Pedido pelo cliente</option> -->
                                    <!-- <option value="2">Confirmado pela loja</option> -->
                                    <option value="3">Cancelado pelo cliente</option>
                                    <!-- <option value="4">Cancelado pela loja – falta de estoque</option> -->
                                    <!-- <option value="5">Venda finalizada – produtos enviados</option> -->
                                </select>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
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
        function enviarIdVenda(valor) {
            document.getElementById('idvendaModal').value = valor;
        }

        function verItemVenda(valor) {
            document.getElementById('idvenda').innerHTML = valor;
        }
    </script>
</body>

</html>