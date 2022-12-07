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

        <a href="#" class="logo">
            <img src="images/logo.webP" alt="">
        </a>

        <nav class="navbar">
            <a href="index.php#home">home</a>
            <a href="index.php#menu">Promoções</a>
            <a href="sobrenos#about">sobre nós</a>
            <a href="#products">produtos</a>
            <a href="index.php#review">avaliações</a>
            <a href="#contact">contato</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
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
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/demon-1.webP" alt="">
                <div class="content">
                    <h3>Item 01</h3>
                    <div class="price">R$7.99 /-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/demon-2.webP" alt="">
                <div class="content">
                    <h3>Item 02</h3>
                    <div class="price">R$1.99/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/demon-3.webP" alt="">
                <div class="content">
                    <h3>Item 03</h3>
                    <div class="price">R$12.99/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/demon-1.webP" alt="">
                <div class="content">
                    <h3>Item 04</h3>
                    <div class="price">R$20.99/-</div>
                </div>
            </div>
            Finalizar<a href="verCarrinho.php" class="btn">Finalizar Pedido</a> Pedido
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

    <!-- Produtos começo-->
    <section class="products" id="products">

        <h1 class="heading"> Cartas de <span> todos os tipos</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="./images/comando-de-prismari.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/comando-de-prismari.webP" alt="">
                </div>
                <div class="content">
                    <h3>Comando De Prismari</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$5.99 <span>R$10.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/impulso-flamejante.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/impulso-flamejante.webP" alt="">
                </div>
                <div class="content">
                    <h3>Impulso Flamejante</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$2.99 <span>R$5.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/lumescriba-leonino.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/lumescriba-leonino.webP" alt="">
                </div>
                <div class="content">
                    <h3>Luminescriba Leonino</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$0.99 <span>R$1.99</span></div>
                </div>
            </div>

        </div>


    </section>

    <!--produtos divisao 1 -->

    <section class="products" id="products">


        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/mago-iniciado-de-murchaflor.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/mago-iniciado-de-murchaflor.webP" alt="">
                </div>
                <div class="content">
                    <h3>Mago Iniciado De Murchaflor</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$2.99 <span>R$4.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/palavra-de-poder-matar.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/palavra-de-poder-matar.webP" alt="">
                </div>
                <div class="content">
                    <h3>Palavra De Poder: Matar</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$0.50 <span>R$1.55</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/verso-desvanescedor.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/verso-desvanescedor.webP" alt="">
                </div>
                <div class="content">
                    <h3>Verso Desvanescedor</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$3.99 <span>R$7.50</span></div>
                </div>
            </div>

        </div>


    </section>

    <!--produtos divisao 2 -->

    <section class="products" id="products">


        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/vinganca-imediata.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/vinganca-imediata.webP" alt="">
                </div>
                <div class="content">
                    <h3>Vingança Imediata</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$2.99 <span>R$4.70</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/adormecer.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/adormecer.webP" alt="">
                </div>
                <div class="content">
                    <h3>Adormecer</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$0.25 <span>R$0.75</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/demonio-da-oferenda-de-sangue.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/demonio-da-oferenda-de-sangue.webP" alt="">
                </div>
                <div class="content">
                    <h3>Demonio Da Oferenda De Sangue</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$3.99 <span>R$8.99</span></div>
                </div>
            </div>

        </div>


    </section>

    <!--produtos divisao 3 -->

    <section class="products" id="products">


        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/lumimante-esperta.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/lumimante-esperta.webP" alt="">
                </div>
                <div class="content">
                    <h3>Lumimante Esperta</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$4.99 <span>R$7.45</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/mechanized-production.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/mechanized-production.webP" alt="">
                </div>
                <div class="content">
                    <h3>Mechanized Production</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$1.99 <span>R$3.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/voo-espectral.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/voo-espectral.webP" alt="">
                </div>
                <div class="content">
                    <h3>Vôo Espectral</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$0.55 <span>R$1.55</span></div>
                </div>
            </div>

        </div>


    </section>

    <!--produtos divisao 4 -->

    <section class="products" id="products">


        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/esmagador-provisorio.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/esmagador-provisorio.webP" alt="">
                </div>
                <div class="content">
                    <h3>Esmagador Provisorio</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$4.50 <span>R$7.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/supervisor-angelical.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/supervisor-angelical.webP" alt="">
                </div>
                <div class="content">
                    <h3>Supervisor Angelical</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$7.99 <span>R$12.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="images/guardiao-do-mausoleu.webP" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/guardiao-do-mausoleu.webP" alt="">
                </div>
                <div class="content">
                    <h3>Guardiao Do Mausoleu</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R$10.99 <span>R$15.99</span></div>
                </div>
            </div>

        </div>

        <!--Produtos fim-->


    </section>

    <!-- Produtos fim-->

    <!-- contato inicio -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>Fale</span> com a gente </h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

            <form action="">
                <h3>deixe seu feedback</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="nome">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="numero">
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
                <a href="./index.php">Home</a>
                <a href="./index.php#menu">Promoções</a>
                <a href="sobrenos.php#about">Sobre Nós</a>
                <a href="produtos.php#products">Produtos</a>
                <a href="./index.php#review">Avaliações</a>
                <a href="./index.php#contact">Contato</a>
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