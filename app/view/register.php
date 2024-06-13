<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/images/icons/favicon.png" type="image/x-icon">
    <script src="../../public/assets/js/register.js" defer></script>

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
    <title>Right Pass | Login</title>
</head>
<body class="w-full h-screen bg-lgcolor flex items-center justify-center">
    <main
    class="bg-white rounded-md flex flex-col gap-[20px] h-[fit] items-center p-[20px] relative shadow-2xl w-[600px]">
        <h1 class="font-bold text-2xl text-gcolor mb-[20px]">Dê o passo certo para se vestir melhor!</h1>
        <form action="#" method="POST" 
        class="flex flex-col w-[80%] gap-[20px] items-center">
            <label class="flex flex-col w-[100%]">
                Nome completo
                <input type="text" maxlength='60' name='register_name' placeholder='João' required
                class="border border-lgcolor h-[40px] rounded shadow-lg w-[100%] p-[10px] outline-gcolor">
            </label>
            <label class="flex flex-col w-[100%]">
                E-mail
                <input type="text" maxlength='60' name='register_mail' placeholder='joao@silva.com' required
                class="border border-lgcolor h-[40px] rounded shadow-lg w-[100%] p-[10px] outline-gcolor">
            </label>
            <label class="flex flex-col w-[100%] relative">
                Senha                
                <input type="password" maxlength='30' name='register_password' placeholder="******" required
                class="border border-lgcolor h-[40px] rounded shadow-lg w-[100%] p-[10px] outline-gcolor">
                <div class="absolute w-[25px] left-[410px] top-[30px] hover:cursor-pointer bg-white z-10">
                    <img id="register_see_password" src="../../public/assets/images/icons/icon_eye.png" alt="Show password" class="w-full">
                </div>
            </label>
            <label class="flex flex-col w-[100%] relative">
                Confirme sua senha   
                <input type="password" maxlength='30' name='register_password_c' placeholder="******" required
                class="border border-lgcolor h-[40px] rounded shadow-lg w-[100%] p-[10px] outline-gcolor">
                <div class="absolute w-[25px] left-[410px] top-[30px] hover:cursor-pointer bg-white z-10">
                    <img id="register_see_password2" src="../../public/assets/images/icons/icon_eye.png" alt="Show password" class="w-full">
                </div>
            </label>

            <button class="border border-gcolor font-bold text-lg text-gcolor h-[50px] rounded shadow-xl w-[100%] hover:bg-gcolor hover:text-white ease-in-out duration-500">Registre-se!</button>
        </form>
        <span class="font-semibold">
            Já tem uma conta? 
            <a href="../../public/index.php?login=open" class="text-lgcolor hover:text-gcolor ease-in-out duration-200">Conecte-se!</a>
        </span>
    </main>
</body>
</html>