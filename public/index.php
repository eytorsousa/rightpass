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
    <header class="h-fit w-full">
        <div class="bg-rcolor flex h-[35px] items-center justify-center text-bcolor text-[14px] w-full">
            Right Pass: Sua Loja de Tênis, Roupas e Acessórios
        </div>

        <div class="flex h-fit items-center justify-center relative w-full">
            <a href="#top"
            class="flex items-center justify-center overflow-hidden w-[260px]">
                <img src="./assets/images/right_pass.png" alt="Main Logo - Right Pass"
                class="h-full w-full">
            </a>

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

            <div class="absolute flex gap-[15px] h-fit items-center justify-center right-[100px] w-fit">
                <a href="<?php echo $link_login ?>" id="header_login"
                    class="bg-cover h-[30px] w-[30px] bg-[url('./assets/images/icons/icon_profile.png')] 
                    hover:bg-[url('./assets/images/icons/icon_profile_s.png')] ease-in-out duration-200">
                </a>
                <a href="<?php echo $link_cart ?>" id="header_cart"
                class="bg-cover h-[30px] w-[30px] bg-[url('./assets/images/icons/icon_bag.png')] 
                hover:bg-[url('./assets/images/icons/icon_bag_s.png')] ease-in-out duration-200">
                </a>
            </div>

            <div id="header_box_login" 
            class="absolute border-4 border-gcolor bg-white flex flex-col h-[fit] hidden items-center justify-center p-[20px] rounded-lg right-[140px] shadow-xl 
            top-[100px] w-[fit] ease-in-out duration-200 z-10">

                <button class="mb-[10px] ml-[250px]" id="header_box_login_close">
                    <img src="./assets/images/icons/icon_close.png" alt="Close"
                    class="w-[20px]">
                </button>

                <h1 class="text-xl text-gcolor font-medium">Bem-vindo(a) de volta!</h1>
                    <form action="#" method="POST"
                    class="flex flex-col gap-[30px] mt-[20px]">
                        <label class="flex flex-col">
                            Email
                            <input type="text" maxlength="60" placeholder="joao@silva.com" required
                            class="border border-black p-[4px] rounded shadow-xl">
                        </label>
                        <label class="flex flex-col">
                            Senha
                            <input type="text" maxlength="30" placeholder="*****" required
                            class="border border-black p-[4px] rounded shadow-xl">
                        </label>
                        <button class="border-2 border-gcolor font-semibold h-[fit] p-[10px] rounded-lg shadow-xl text-gcolor w-[fit]   
                        hover:bg-gcolor hover:text-white ease-in-out duration-200">
                            Conectar!
                        </button>
                    </form>
                    <span class="mt-[20px] text-md">
                        Não tem uma conta? 
                        <a href="../app/view/register.php" class="font-medium text-lgcolor hover:text-gcolor ease-in-out duration-200">Cadastre-se!</a>
                    </span>
            </div>

            <div id="header_box_cart" 
            class="border-l border-black bg-white fixed flex flex-col h-screen items-center right-[-500px] shadow-xl 
            top-[0px] w-[500px] ease-in-out duration-200 z-10">

                <div class="flex mt-[20px] place-content-evenly w-full">
                    <h1 class="text-xl text-gcolor font-medium">Seu carrinho de compras!</h1>
                    <button class="w-[30px] flex items-center" id="header_box_cart_close">
                        <img src="./assets/images/icons/icon_close.png" alt="Close">
                    </button>
                </div>
                
                <div class="flex flex-col gap-[50px] items-center justify-center mt-[300px]">
                    <img src="./assets/images/icons/icon_cart.png" alt="Carrinho de compras"
                    class="w-[70px]">
                    <h1>Seu carrinho está vazio!</h1>
                </div>

                <div class="mt-[50px]">
                    <a href="#" id="keep_buying"
                    class="border-2 border-gcolor font-semibold h-[fit] p-[10px] rounded-lg shadow-xl text-gcolor w-[fit]
                    hover:bg-gcolor hover:text-white ease-in-out duration-200">
                        Continuar comprando!
                    </a>
                </div>
        </div>
        </div>

        <nav class="flex font-medium gap-[20px] h-[15px] items-center justify-center text-xl w-full">
            <a href="#"
            class="text-lgcolor 
            hover:text-gcolor ease-in-out duration-300">
                SNEAKERS
            </a>
            <a href="#"
            class="text-lgcolor 
            hover:text-gcolor ease-in-out duration-300">
                ACESSÓRIOS
            </a>
            <a href="#"
            class="text-lgcolor 
            hover:text-gcolor ease-in-out duration-300">
                MARCAS
            </a>
        </nav>
    </header>
</body>
</html>