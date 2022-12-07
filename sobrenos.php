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

<>

    <body>

        <!-- header section começo  -->

        <header class="header">

            <a href="sobrenos.php" class="logo">
                <img src="images/logo.webP" alt="">
            </a>

            <nav class="navbar">
                <a href="index.php">home</a>
                <a href="index.php#menu">Promoções</a>
                <a href="#about">sobre nós</a>
                <a href="produtos#products">produtos</a>
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

        <!-- Quem somos inicio-->
        <section class="about" id="about">

            <h1 class="heading"> <span>Quem somos?</span></h1>

            <div class="row">

                <div class="content">
                    <h3>Historia por trás da empresa</h3>
                    <p>Atualmente alocados na Cidade Tiradentes, somos uma empresa recém formada, e, como primeira loja, decidimos que faríamos sobre cartas do jogo Magic. a empresa formada por 6 alunos, da Escola Técnica de Cidade Tiradentes, sendo esses 6 alunos: alexandre sousa garrido, william melo da mota, emanuel da silva, lucas ferreira chagas, rafael satirio dos santos ribeiro e gabriel moção ribeiro. Veja as fotos dos devs logo a baixo.</p>
                </div>

                <div class="image">
                    <img src="images/logo.webP" alt="">
                </div>

            </div>
        </section>


        <!--fotos devs inicio-->
        <section class="products" id="products">

            <h1 class="heading"> vamos conhecer<span> nossos devs !</span> </h1>

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="images/alexandre.webP" alt="">
                    </div>
                    <div class="content">
                        <h3>Alexandre Sousa Garrido</h3>
                        <div class="price">
                            <h3>Desenvolvedor de font-end</h3>
                        </div>
                        <h3>16 anos</h3>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/uilia.webP" alt="">
                    </div>
                    <div class="content">
                        <h3>william melo da mota</h3>
                        <div class="price">
                            <h3>Desenvolvedor de back-end</h3>
                        </div>
                        <h3>17 anos</h3>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/rafael.webP" alt="">
                    </div>
                    <div class="content">
                        <h3>Rafael satirio Dos Santos Ribeiro</h3>
                        <div class="price">
                            <h3>Produtor de conteudo</h3>
                        </div>
                        <h3>17 anos</h3>
                    </div>
                </div>

            </div>

        </section>

        <!--parte 2-->

        <section class="products" id="products">

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="images/moncao.webP" alt="">
                    </div>
                    <div class="content">
                        <h3>Gabriel Monção Ribeiro</h3>
                        <div class="price">
                            <h3>Produtor de conteudo</h3>
                        </div>
                        <h3>17 anos</h3>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/lucas.webP" alt="">
                    </div>
                    <div class="content">
                        <h3>Lucas Ferreira Chagas</h3>
                        <div class="price">
                            <h3>Designer geral</h3>
                        </div>
                        <h3>18 anos</h3>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/emanuel.webP" alt="">
                    </div>
                    <div class="content">
                        <h3>Emanuel Da Silva</h3>
                        <div class="price">
                            <h3>Desenvolvedor de back-end</h3>
                        </div>
                        <h3>16 anos</h3>
                    </div>
                </div>

            </div>

        </section>

        <!--fotos devs fim-->

        <!--parte 2 quem somos-->

        <section class="about" id="about">



            <div class="row">

                <div class="image">
                    <img src="images/fotin.webP" alt="">
                </div>

                <div class="content">
                    <h3>Criação da Lotus Garden</h3>
                    <p>A Lotus garden foi criada inicialmente ao intuito educacional, com base em um jogo de cartas bem famoso, e foi se expandindo até virar essa empresa gigante como é cohecida hoje</p>
                    <br>
                </div>

            </div>
        </section>

        <!--parte 3-->

        <section class="about" id="about">



            <div class="row">

                <div class="content">
                    <h3>De onde veio o nome?</h3>
                    <p>O nome "Lotus Garden" foi feito baseado na carta mais iconica de Magic, a black lotus. assim sendo criada o nome que em português significa: "jardim de lotus".</p>
                    <br>
                </div>

                <div class="image">
                    <img src="images/blacklotus.webP" alt="">
                </div>

            </div>
        </section>
        <!-- Quem somos fim-->




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