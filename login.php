<?php
session_start();
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
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/88b536a571.js" crossorigin="anonymous"></script>
    <!-- css  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- TOASTR -->
    <link href="./css/toastr.min.css" rel="stylesheet" />

</head>

<body>

    <div class="retorno">
        <a href="./index.php">Voltar para a loja</a>
    </div>


    <section class="about" id="about">


        <div class="row">

            <div class="image">
                <img src="images/login-img-1080-lite.webP" alt="">
            </div>

            <div class="content">

                <section class="contact" id="contact">

                    <h1 class="heading"> <span>Fazer Login</span></h1>

                    <div class="row">

                        <form action="logaUsuario.php" method="post">
                            <div class="inputBox">
                                <span class="fas fa-envelope"></span>
                                <input type="email" placeholder="email" name="email" required>
                            </div>
                            <div class="inputBox">
                                <span class="fas fa-key"></span>
                                <input type="password" placeholder="senha" name="senha" id="senha" required>
                                <i class="fa-sharp fa-solid fa-eye" id="eye-icon"></i>
                            </div>
                            <input type="submit" value="Entrar" class="btn">
                        </form>

                        <a class="cadastro-mensagem" href="cadastro.php"> <span>Não tem uma conta? Cadastre-se aqui</span> </a>

                    </div>

                </section>



            </div>

        </div>

    </section>

    <script src="./js/password.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- TOAST -->
    <script src="./js/toastr.min.js"></script>
    <script src="./js/toastErrorNotification.js"></script>

    <?php
    if (isset($_SESSION['loginUsuarioInvalido'])) :
    ?>
        <script>
            toastError("Falha", "Verifique as informaçoes e tente novamente")
        </script>
    <?php
    endif;
    unset($_SESSION['loginUsuarioInvalido']);
    ?>
</body>