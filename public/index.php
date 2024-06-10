<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/images/icons/favicon.png" type="image/x-icon">

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
<body class="w-full h-screen">
    <header class="w-full h-fit">
        <div class="w-full h-[35px] bg-rcolor flex items-center justify-center text-bcolor text-[14px]">
            Right Pass: Sua Loja de Tênis, Roupas e Acessórios
        </div>

        <div class="w-full h-fit flex relative items-center justify-center">
            <a href="#top"
            class="w-[260px] flex items-center justify-center overflow-hidden">
                <img src="./assets/images/right_pass.png" alt="Main Logo - Right Pass"
                class="w-full h-full">
            </a>

            <div class="w-fit h-fit flex gap-[15px] items-center justify-center absolute right-[100px]">
                
                <?php 
                    session_start();
                    if(isset($_SESSION['is_logged'])) {
                        $link_profile = '../app/view/profile.php';
                        $link_favorite = '';
                        $link_bag = '';
                    } else {
                        $link_profile = '../app/view/login.php';
                        $link_favorite = $link_profile;
                        $link_bag = $link_profile;
                    }
                     
                ?>

                <a href='<?php echo $link_profile ?>'
                    class="w-[30px] h-[30px] bg-[url('./assets/images/icons/icon_profile.png')] hover:bg-[url('./assets/images/icons/icon_profile_s.png')] bg-cover ease-in-out duration-200">
                </a>
                <a href="<?php echo $link_favorite ?>"
                class="w-[30px] h-[30px] bg-[url('./assets/images/icons/icon_favorite.png')] hover:bg-[url('./assets/images/icons/icon_favorite_s.png')] bg-cover ease-in-out duration-200">
                </a>
                <a href="<?php echo $link_bag ?>"
                class="w-[30px] h-[30px] bg-[url('./assets/images/icons/icon_bag.png')] hover:bg-[url('./assets/images/icons/icon_bag_s.png')] bg-cover ease-in-out duration-200">
                </a>
            </div>
        </div>

        <nav class="w-full h-[15px] flex items-center justify-center text-xl font-medium gap-[20px]">
            <a href="#"
            class="text-lgcolor hover:text-gcolor ease-in-out duration-300">
                SNEAKERS
            </a>
            <a href="#"
            class="text-lgcolor hover:text-gcolor ease-in-out duration-300">
                ACESSÓRIOS
            </a>
            <a href="#"
            class="text-lgcolor hover:text-gcolor ease-in-out duration-300">
                MARCAS
            </a>
        </nav>
    </header>
</body>
</html>