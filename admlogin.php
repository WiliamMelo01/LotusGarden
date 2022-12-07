<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotus Garden</title>

    <!-- font  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/88b536a571.js" crossorigin="anonymous"></script>
    <!-- css  -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    
    <div class="retorno">
        <a href="./index.php">Voltar para a loja</a>
    </div>

    <section class="about" id="about">


        <div class="row">

            <div class="image">
                <img src="images/login-adm-img.webP" alt="">
            </div>

            <div class="content">

                <section class="contact" id="contact">

                    <h1 class="heading"> <span>Fazer Login como Adiministrador</span></h1>

                    <div class="row">

                        <form action="./area-restrita/adm/loga.php" method="post">

                            <?php
                            if (isset($_SESSION['dadosInvalidos'])) :
                            ?>
                                <span id="dadosInvalidos">❌ Dados incorretos</span>
                            <?php
                            endif;
                            unset($_SESSION['dadosInvalidos'])
                            ?>


                            <div class="inputBox">
                                <span class="fas fa-envelope"></span>
                                <input type="text" placeholder="usuario" name="email" required>
                            </div>
                            <div class="inputBox">
                                <span class="fas fa-key"></span>
                                <input type="password" placeholder="senha" name="senha" id="senha" required>
                                <i class="fa-sharp fa-solid fa-eye" id="eye-icon"></i>
                            </div>
                            <input type="submit" value="Entrar" class="btn">
                        </form>

                    </div>

                </section>



            </div>

        </div>

    </section>

    <script src="./js/password.js"></script>

</body>

</html>