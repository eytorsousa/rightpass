<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/css/config.css">
    <link rel="stylesheet" href="../../public/assets/css/register.css">

    <script src="../../public/assets/js/register_login.js" defer></script>

    <title>Registre-se</title>
</head>
<body>
    <a href="#" class="back"><- Voltar</a>
    <main>
        <div class="image_section">
            <img src="<?php echo BASE_URL; ?>/register.png" alt="Tênis">
        </div>
        <div class="form_section">
            <h1>Dê o passo certo <br> para se vestir melhor!</h1>
            <form action="#" method="POST">
                <label>
                    Nome Completo
                    <input type="text" placeholder="João Silva" required>
                </label>
                <label>
                    E-mail
                    <input type="email" placeholder="joaosilva@gmail.com" required >
                </label>
                <label>
                    Senha
                    <input type="password" placeholder="********" required class="password">
                    <div class="show_password">
                        <img src="" alt="Show Password" class="show_password_img">
                    </div>
                </label>
                <label>
                    Confirme a senha
                    <input type="password" placeholder="********" required class="password">
                    <div class="show_password">
                        <img src="" alt="Show Password" class="show_password_img">
                    </div>
                </label>
                <button class="register"> Registre-se!</button>
            </form>
            <span>Já tem uma conta? <a href="./login.php">Conecte-se!</a></span>
        </div>
    </main>
</body>
</html>