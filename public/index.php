<?php include '../app/config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/config.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="shortcut icon" href="./assets/images/icons/favicon.png" type="image/x-icon">

    <!-- <script src="./assets/js/index.js" module defer></script> -->
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
    
    <?php include_once('../app/view/includes/news.php'); ?>

    <?php include_once('../app/view/includes/footer.php'); ?>
</body>
</html>
