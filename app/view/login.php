<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/css/config.css">
    <link rel="stylesheet" href="../../public/assets/css/login.css">

    <script src="../../public/assets/js/register_login.js" defer></script>

    <title>Conecte-se!</title>
</head>
<body>
    <a href="#" class="back"><- Voltar</a>
    <main>
        <div class="form_section">
            <h1>Bem-vindo(a) de volta!</h1>
            <form action="#" method="POST">
                <label>
                    E-mail
                    <input type="email" placeholder="joaosilva@gmail.com" required>
                </label>
                <label>
                    Senha
                    <input type="password" placeholder="********" required class="password">
                    <div class="show_password">
                        <img src="" alt="Show Password" class="show_password_img">
                    </div>
                </label>
                <button class="login"> Conecte-se!</button>
            </form>
            <span>É novo(a) por aqui? <a href="./register.php">Registre-se!</a></span>
        </div>
        <div class="image_section">
            <img src="<?php echo BASE_URL; ?>/login.png" alt="Tênis">
        </div>
    </main>
</body>
</html>