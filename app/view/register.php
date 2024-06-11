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
    <title>Right Pass | Login</title>
</head>
<body class="w-full h-screen bg-gradient-to-r from-gcolor to-lgcolor flex flex-col items-center justify-center">
    <h1>Dê o passo certo para se vestir melhor!</h1>
    <main
    class="mt-[20px] bg-white rounded-md p-[10px] flex flex-col gap-[20px] shadow-lg shadow-black-500/50">
        <form action="#" method="POST" 
        class="flex flex-col">
        <label>
                Nome
                <input type="text" maxlength='30' name='form_name' placeholder='João' required>
            </label>
            <label>
                Sobrenome
                <input type="text" maxlength='30' name='form_name_c' placeholder='Silva' required>
            </label>
            <label>
                E-mail
                <input type="text" maxlength='60' name='form_mail' placeholder='joao@silva.com' required>
            </label>
            <label>
                Confirme seu e-mail
                <input type="text" maxlength='60' name='form_mail_c' placeholder='joao@silva.com' required>
            </label>
            <label>
                Senha                
                <input type="password" maxlength='30' name='form_password' required>
            </label>
            <label>
                Confirme sua senha   
                <input type="password" maxlength='30' name='form_password_c' required>
            </label>

            <button>Registre-se!</button>
        </form>
    </main>
    <span>Já tem uma conta? <a href="../../public/index.php">Conecte-se!</a></span>
</body>
</html>