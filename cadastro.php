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

                    <h1 class="heading"> <span>Fazer Cadastro</span></h1>

                    <div class="row">

                        <form action="./cadastraCliente.php" method="post">

                            <div class=" inputBox">
                                <span class="fas fa-envelope"></span>
                                <input type="email" placeholder="Seu E-mail" name="email" required autofocus>
                            </div>
                            <div class=" inputBox">
                                <span class="fa-solid fa-id-card"></span>
                                <input type="text" placeholder="Seu CPF" name="cpf" id="cpf" required autocomplete="off" pattern="^[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$" title="Formato: 111.111.111.-11" maxlength="14">
                            </div>
                            <div class="inputBox">
                                <span class="fas fa-user"></span>
                                <input type="text" placeholder="Seu Nome completo" name="nome" id="nome" required pattern="^[a-zA-Z\s]{3,}" title="Somente letras.Ex: ana maria">
                            </div>
                            <div class="inputBox">
                                <span class="fas fa-lock"></span>
                                <input type="password" placeholder="Sua senha" name="senha" id="senha" required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z.\d@$!%*#?&]{8,}$" title="Minimo de 8 caracteres, pelo menos uma letra, um numero e um caractere especial">
                                <i class="fa-sharp fa-solid fa-eye" id="eye-icon"></i>
                            </div>
                            <input type="submit" value="Cadastrar" class="btn">
                        </form>

                        <a class="cadastro-mensagem" href="login.php"> <span>Já tem uma conta? faça o login aqui</span> </a>

                    </div>

                </section>

            </div>

        </div>


    </section>


    <script src="./js/password.js"></script>
    <script src="./js/cpfMask.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- TOAST -->
    <script src="./js/toastr.min.js"></script>
    <script src="./js/toastNotifications.js"></script>
    <script src="./js/toastErrorNotification.js"></script>
    
    <?php
    if (isset($_SESSION['CadastroComSucesso'])) :
    ?>
        <script>
            toastSuccess("Sucesso", "Usuario Cadastrado com sucesso. :)")
        </script>
    <?php
    endif;
    unset($_SESSION['CadastroComSucesso']);
    ?>

    <?php
    if (isset($_SESSION['CadastroComFalha'])) :
    ?>
        <script>
            toastError('Ocorreu uma falha ao cadastrar.Tente novamente mais tarde.Caso o problema persista mande uma mensagem na area de contato.', 'Falha')
        </script>
    <?php
    endif;
    unset($_SESSION['CadastroComFalha']);
    ?>

    <?php
    if (isset($_SESSION['cpfDuplicado'])) :
    ?>
        <script>
            toastError('Este cpf ja esta cadastrado!', 'Falha')
        </script>
    <?php
    endif;
    unset($_SESSION['cpfDuplicado']);
    ?>

    <?php
    if (isset($_SESSION['emailDuplicado'])) :
    ?>
        <script>
            toastError('Este E-mail ja esta cadastrado!', 'Falha')
        </script>
    <?php
    endif;
    unset($_SESSION['emailDuplicado']);
    ?>

    <?php
    if (isset($_SESSION['cpfInvalido'])) :
    ?>
        <script>
            toastError('Este CPF não é valido!', 'Falha')
        </script>
    <?php
    endif;
    unset($_SESSION['cpfInvalido']);
    ?>

</body>