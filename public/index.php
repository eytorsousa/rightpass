<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/images/icons/favicon.png" type="image/x-icon">

    <script src="./assets/js/navigate.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gcolor': '#475841',
                        'lgcolor': '#9FB8AD',
                        'bcolor': '#011627',
                        'rcolor': '#EFC7C2',
                        'ycolor': '#FFC800',
                    }
                }
            }
        }
    </script>

    <title>Right Pass</title>
</head>
<body class="flex flex-col w-full h-screen">
    <?php
        session_start();
        if(isset($_SESSION['islogged'])){
            $link_login = '../app/view/profile.php';
            $link_cart = '../app/view/cart.php';
        } else {
            $link_login = '#';
            $link_cart = '#';
        }
    ?>
    <?php include('../app/view/includes/header.html') ?>

     
</body>
</html>