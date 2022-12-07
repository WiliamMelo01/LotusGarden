<?php
require_once './DAO/DAOProduto.php';
require_once './model/Produto.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotus Garden</title>

    <!-- font  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- css  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section começo  -->

    <header class="header">

        <a href="sobrenos.php" class="logo">
            <img src="images/logo.webP" alt="">
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#menu">Promoções</a>
            <a href="sobrenos.php#about">sobre nós</a>
            <!-- <a href="produtos.php#products">produtos</a> -->
            <a href="#review">avaliações</a>
            <a href="#contact">contato</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <a href="login.php">
                <div class="fas fa-shopping-cart" id="cart-btn"></div>
            </a>
            <a href="login.php">
                <div class="fas fa-user" id="login-btn"></div>
            </a>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-container">
            <h2>
                Entre em sua conta para acessar o carrinho
            </h2>
        </div>

    </header>

    <!-- header section fim -->

    <!-- slogan começo  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Lotus Garden gloria e poder</h3>
            <p>Garantia de qualidade e variedade que só a Lotus Gardem tem!</p>
            <a href="produtos.php" class="btn">Compre agora</a>
        </div>

    </section>

    <!-- slogan fim -->

    <!-- inicio das promoções -->
    <section class="menu" id="menu">

        <h1 class="heading"> Promoções <span>Explosivas!!!</span> </h1>

        <div class="box-container">
            <?php
            $produtos = DAOProduto::listarPromocoes();

            foreach ($produtos as $produto) {
                echo ('
                    <div class="box">
                        <img src="' . $produto['imagem'] . '" alt="">
                        <h3>' . $produto['nomeProduto'] . '</h3>
                        <div class="price">$' . $produto['precoProduto'] . ' <span>' . $produto['precoAntigo'] . '</span></div>
                        <a href="./login.php" class="btn">adicionar ao carrinho</a>
                    </div>
                    ');
            }
            ?>
        </div>

    </section>

    <!-- fim das promoções -->

    <!-- sobre nós começo -->

    <section class="about" id="about">

        <h1 class="heading"> <span>Sobre</span> Nós </h1>

        <div class="row">

            <div class="image">
                <img src="images/home-devs.webP" alt="">
            </div>

            <div class="content">
                <h3>Quem está por trás de tudo?</h3>
                <p>Venha conhecer os incriveis devs por trás de toda essa qualidade de venda.</p>
                <p>Como o site foi feito? equipe de produção? veja tudo aqui!</p>
                <a href="./sobrenos.php" class="btn">Veja mais</a>
            </div>

        </div>

    </section>

    <!-- sobre nós fim -->


    <!-- Vendas começo -->
    <section class="about melhores-cartas" id="about">

        <h1 class="heading"> <span>As melhores cartas</span> Em um só lugar </h1>

        <div class="row">

            <div class="image">
                <img src="images/home-comercial.webP" alt="">
            </div>

            <div class="content">
                <h3>Procurando cartas para seu deck? veja aqui as melhores cartas para montar seu deck!</h3>
                <p>Venha ver diversas cartas para fazer o seu deck e conquistar sua gloria!</p>
                <p>clique no botão abaixo para ir para pagina de venda de cartas! explore, descubra e monte o melhor deck para você!</p>
                <a href="./produtos.php" class="btn">Veja mais</a>
            </div>

        </div>

    </section>
    <!-- Vendas fim -->


    <!-- avaliações começo  -->

    <section class="review avaliacoes" id="review">

        <h1 class="heading"> Avaliações</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img.webP" alt="" class="quote">
                <p>Site otimo!! já comprei 3x e voltarei a comprar! produtos em perfeitas condições e chega em muito pouco tempo!!</p>
                <img src="images/perfil-1.webP" class="user" alt="">
                <h3>Gabriel Martinez</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.webP" alt="" class="quote">
                <p>Me surpreendi com a qualidade dos produtos, chegam super bem embalados e em pouco tempo!</p>
                <img src="images/perfil-2.webP" class="user" alt="">
                <h3>jony crow</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.webP" alt="" class="quote">
                <p>Fantastico!!! encontrei todas as cartas que procurava para o meu deck, e o melhor, por um preço super acessivel!</p>
                <img src="images/perfil-3.webP" class="user" alt="">
                <h3>joana dias</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>

    <!-- avaliações fim  -->


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
                <a href="sobrenos.php#about">Sobre Nós</a>
                <!-- <a href="produtos.php#products">Produtos</a> -->
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

                <a href="admlogin.php" class="login-adm">Entrar como adm</a>
            </div>


    </section>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>