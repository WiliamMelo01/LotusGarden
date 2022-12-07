<?php
session_start();
if (!isset($_SESSION['usuarioLogado'])) {
    header("Location:../../login.php");
}

require_once '../../DAO/DAOProduto.php';
require_once '../../model/ItemVenda.php';

function pegarTamanhoCarrinho()
{
    if (isset($_COOKIE['carrinho'])) {

        $carrinho = $_COOKIE['carrinho'];

        return count(unserialize($carrinho));
    }

    return 0;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotus Garden</title>

    <!-- font  -->
    <script src="https://kit.fontawesome.com/88b536a571.js" crossorigin="anonymous"></script>

    <!-- css  -->
    <link rel="stylesheet" href="../../css/style.css">

</head>

<body>

    <!-- header section começo  -->

    <header class="header">

        <a href="Home.php"" class=" logo">
            <img src="../../../../images/logo.webP" alt="">
        </a>

        <nav class="navbar">
            <a href="Home.php">home</a>
            <a href="Home.php#menu">Promoções</a>
            <a href="#products">produtos</a>
            <a href="#contact">contato</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" <?php echo "data-count='" . pegarTamanhoCarrinho() . "'"; ?> id="cart-btn-user"></div>
            <a href="#">
                <div class="fa-solid fa-circle-user" id="user-actions">
                </div>
            </a>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-container">
            <?php

            if (isset($_COOKIE['carrinho'])) {
                $carrinho = unserialize($_COOKIE['carrinho']);
                foreach ($carrinho as $item) {

                    echo '
                        <div class="cart-item">
                            <a href="apagarItemCarrinho.php?idItemCarrinho=' . $item->getId() . '" class="fas fa-times"></a>
                            <img src="../../' . $item->getProduto()->getImagem() . '" alt="Cart image">
                            <div class="content">
                                <h3>' . $item->getProduto()->getNomeProduto() . '</h3>
                                <div class="price">R$' . $item->getProduto()->getPrecoProduto() . '</div>
                                <div class="quantity">Qtde: ' . $item->getQtde() . '</div>
                            </div>
                        </div>
                        <a href="verCarrinho.php" class="btn">Finalizar Pedido</a> 
';
                }
            } else {
                echo '<h2>Adicione algum item no carrinho.</h2>';
            }
            ?>
        </div>

        <div class="user-actions-container">
            <ul>
                <li>
                    <i class="fa-sharp fa-solid fa-basket-shopping"></i>
                    <a href="minhasCompras.php">Minhas compras</a>
                </li>
                <li>
                    <i class="fa-solid fa-id-card"></i>
                    <a href="#">Meus dados</a>
                </li>
                <li>
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <a href="logout.php">Sair da conta</a>
                </li>
            </ul>
        </div>

    </header>

    <!-- header section fim -->

    <!-- slogan começo  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Lotus Garden gloria e poder</h3>
            <p>Garantia de qualidade e variedade que só a Lotus Gardem tem!</p>

        </div>

    </section>

    <!-- slogan fim -->

    <!--produtos divisao 1 -->
    <section class="products" id="products">
        <div class="box-container">

            <?php

            $produtos = DAOProduto::listar();

            foreach ($produtos as $produto) {
                echo '
                <div class="box">
                <div class="icons">
                    <a href="./adicionarCarrinho.php?idproduto=' . $produto['idProduto'] . '" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="../../' . $produto['imagem'] . '" target="_blank" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../../' . $produto['imagem'] . '" alt="">
                </div>
                <div class="content">
                    <h3>' . $produto['nomeProduto'] . '</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$' . $produto['precoProduto'] . '</div>
                </div>
            </div>
            ';
            }
            ?>

        </div>

        <!--Produtos fim-->


    </section>

    <!-- Produtos fim-->

    <!-- contato inicio -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>Fale</span> com a gente </h1>

        <div class="row">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.3035854744694!2d-46.410144784453095!3d-23.593442868664184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6f7090183c91%3A0x7fafdf938dd0eb78!2sEscola%20T%C3%A9cnica%20Estadual%20de%20Cidade%20Tiradentes!5e0!3m2!1spt-BR!2sbr!4v1664933728595!5m2!1spt-BR!2sbr" style="border:0;" width="50%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="">
                <h3>deixe seu feedback</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="nome">
                </div>
                <div class="contactWrapper">
                    <div class="inputBox">
                        <span class="fas fa-envelope"></span>
                        <input type="email" placeholder="email">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-phone"></span>
                        <input type="number" placeholder="numero">
                    </div>
                </div>
                <div class="inputBox">
                    <textarea required name="feedback" id="feedback" rows="10" placeholder="Deixe a sua opinião/Duvida"></textarea>
                </div>
                <input type="submit" value="Enviar" class="btn">
            </form>

        </div>

    </section>

    <!-- contato fim -->


    <!-- footer section starts  -->


    <section class="footer">

        <div class="fim">

            <div class="links">
                <a href="#home">Home</a>
                <a href="#menu">Promoções</a>
                <a href="produtos.php#products">Produtos</a>
                <a href="#review">Avaliações</a>
                <a href="#contact">Contato</a>
            </div>

            <div class="footer-center">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                </div>
                <span class="credit">Feito por Alexandre Sousa Garrido. todos os direitos são reservados!</span>

            </div>

    </section>

    <!-- custom js file link  -->
    <script src="../../js/script.js"></script>
    //Show User Action
    <script src="../../js/showUserActions.js"></script>

</body>

</html>