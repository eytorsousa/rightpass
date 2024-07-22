<?php include '../app/config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/config.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/news.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="shortcut icon" href="./assets/images/icons/favicon.png" type="image/x-icon">

    <script src="./assets/js/index.js" module defer></script>
    <!-- <script src="./assets/js/navigate.js" module defer></script> -->

    <title>Right Pass</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['is_logged'])){
            $link_login = '../app/view/profile.php';
        } else {
            $link_login = '../app/view/login.php';
        }
    ?>
    <?php include_once('../app/view/includes/header.php'); ?>

    <section class="marks">
        <h1>Nossas marcas</h1>
        <div class="logos">
            <a href="#" class="logo">
                <img src="<?php echo BASE_URL ?>/logos/logo_adidas-black.png" alt="Adidas">
            </a>
            <a href="#" class="logo">
                <img src="<?php echo BASE_URL ?>/logos/logo_nike-black.png" alt="Nike">
            </a>
            <a href="#" class="logo">
                <img src="<?php echo BASE_URL ?>/logos/logo_puma-black.png" alt="Puma">
            </a>
            <a href="#" class="logo">
                <img src="<?php echo BASE_URL ?>/logos/logo_fila-black.png" alt="Fila">
            </a>
            <a href="#" class="logo">
                <img src="<?php echo BASE_URL ?>/logos/logo_oakley-black.png" alt="Oakley">
            </a>
            <a href="#" class="logo">
                <img src="<?php echo BASE_URL ?>/logos/logo_tnf-black.png" alt="The North Face">
            </a>
            <a href="#" class="logo">
                <img src="<?php echo BASE_URL ?>/logos/logo_chanel-black.png" alt="Chanel">
            </a>
        </div>
    </section>
    
    <section class="special">
        <h1>Especial para você!</h1>
        <a href="#" class="banner">
        </a>
    </section>

    <section class="buy">
        <a href="#" class="discount">
        </a>
        <a href="#" class="store">
        </a>
    </section> 

    <section class="location">
        <div class="text">
            <h1>Conheça nossa loja!</h1>
            <p>O mesmo endereço, mas sempre diferente! <br> Seu espaço para acompanhar as principais novidades.</p>
        </div>
        <a href="https://www.google.com.br/maps/place/Instituto+Federal+de+Educa%C3%A7%C3%A3o,+Ci%C3%AAncia+e+Tecnologia+de+S%C3%A3o+Paulo+IFSP+Guarulhos/data=!4m7!3m6!1s0x94cef51fbe5f8681:0x1f8cf929993dc97!8m2!3d-23.4388276!4d-46.5373914!16s%2Fg%2F1tfmdck2!19sChIJgYZfvh_1zpQRl9yTmZLP-AE?authuser=0&hl=pt-PT&rclk=1" target="_blank">
            QUERO CONHECER!
        </a>
    </section>
    
    <section class="inspirations">
        <h1>Inspirações</h1>
        <p>Marque @RightPass e compartilhe seu estilo para ter a chance de ser destacado aqui.</p>
        <div class="pictures">
            <div class="picture">
                <img src="<?php echo BASE_URL ?>/inspiration.jpg" alt="Inspiração">
            </div>
            <div class="picture">
                <img src="<?php echo BASE_URL ?>/inspiration2.jpg" alt="Inspiração">
            </div>
            <div class="picture">
                <img src="<?php echo BASE_URL ?>/inspiration3.jpg" alt="Inspiração">
            </div>
            <div class="picture">
                <img src="<?php echo BASE_URL ?>/inspiration4.jpg" alt="Inspiração">
            </div>
        </div>
    </section>

    <?php include_once('../app/view/includes/news.php'); ?>

    <?php include_once('../app/view/includes/footer.php'); ?>
</body>
</html>
