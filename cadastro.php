<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/padrao.css">
    <title>Twitter</title>
</head>

<body>
    <header>
        <nav>
            <div class="div-logo">
                <img src="imgs/logo.png" width="80">
            </div>
            <h3>Twitter</h3>
        </nav>
    </header>
    <section class="sec-login">
        <form action="app/cadastro.php" method="POST">
            <h2>Bem vindo ao Twitter, realize o cadastro pra entrar na plataforma!</h2><br>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Digite seu email aqui..." required><br>
            <?php
            if (isset($_GET['mensagem'])) {
                echo ('<p class="mensagem text-center">' . $_GET['mensagem'] . '</p>');
            }
            ?>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="Digite sua senha aqui..." required><br>
            <label for="senha2">Confirme sua senha:</label>
            <input type="password" name="senha2" placeholder="Confirme sua senha aqui..." required><br>
            <label for="username">Nome de usuário:</label>
            <input type="text" name="username" placeholder="Digite seu username..." required><br>
            <input type="submit" value="Cadastrar">
            <a href="index.php" class="text-center">Realize o login aqui!</a>
        </form>
    </section>
</body>

</html>