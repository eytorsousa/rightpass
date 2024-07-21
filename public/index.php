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
