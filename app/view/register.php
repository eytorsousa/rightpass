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

    <title>Registre-se</title>
</head>
<body>
    <h1>Dê o passo certo para se vestir melhor!</h1>
    <main>
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
                Número de telefone
                <input type="text" maxlength='15' name='form_phone' placeholder='(11) 94002-8922' required>
            </label>
            <label>
                E-mail
                <input type="text" max-length='60' name='form_mail' placeholder='joao@silva.com' required>
            </label>
            <label>
                Confirme seu e-mail
                <input type="text" max-length='60' name='form_mail_c' placeholder='joao@silva.com' required>
            </label>
            <label>
                Senha                
                <input type="password" max-length='30' name='form_password' required>
            </label>
            <label>
                Confirme sua senha   
                <input type="password" max-length='30' name='form_password_c' required>
            </label>

            <button>Registre-se!</button>
        </form>
    </main>
</body>
</html>