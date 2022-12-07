<?php
session_start();
if (!isset($_SESSION['usuarioLogado'])) {
    header("Location:../../login.php");
}

require_once '../../model/ItemVenda.php';
require_once '../../model/Produto.php';

if (!isset($_COOKIE['carrinho'])) {
    header("Location: Home.php");
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
    <!-- Style -->
    <link rel="stylesheet" href="../../css/verCarrinho.css">

    <title>Lotus Garden - Finalizar compra</title>
</head>

<body>
    <div class="container-fluid">
        <button>
            <a href="Home.php">Voltar</a>
        </button>

        <?php
        if (isset($_COOKIE["carrinho"])) {
            $carrinhorecebido =  $_COOKIE["carrinho"];
            $carrinhoAtual = unserialize($carrinhorecebido);
        } else {
            header("Location: Home.php");
        }
        ?>

        <h1>Carrinho de compras</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" width='100px'>Foto</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Qtde.</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Remover</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $valortotal = 0;
                foreach ($carrinhoAtual as $idvetorcarrinho => $itemcarrinho) {
                    $valortotal += $itemcarrinho->getSubtotal();
                ?>
                    <tr>
                        <th scope="row"><?php echo $itemcarrinho->getProduto()->getIdProduto(); ?></th>
                        <td> <img src="../../<?php echo $itemcarrinho->getProduto()->getImagem(); ?>" class="rounded" width="50%"></td>
                        <td><?php echo $itemcarrinho->getProduto()->getNomeProduto(); ?></td>
                        <td><?php echo $itemcarrinho->getQtde(); ?> </td>
                        <td><?php echo number_format($itemcarrinho->getProduto()->getPrecoProduto(), 2, ',', '.'); ?></td>
                        <td><?php echo number_format($itemcarrinho->getSubtotal(), 2, ',', '.'); ?></td>
                        <td><a class="btn btn-outline-danger" href="apagarItemCarrinho.php?idItemCarrinho=<?php echo $itemcarrinho->getId(); ?>">Remover item do carrinho</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br><br>
        <h3>Valor total: R$ <?php echo number_format($valortotal, 2, ',', '.'); ?></h3>
        <br><br>
        <a class="btn btn-success" href="finaliza-venda.php?valortotal=<?php echo $valortotal; ?>">Finalizar compra</a>

        <br><br><br>
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/cep.js"></script>
</body>

</html>