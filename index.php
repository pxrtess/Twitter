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
    <?php
    if(isset($_GET['mensagem']))
        echo('<h1 class="text-center">'.$_GET['mensagem'].'</h1><br><br>')
    ?>
        <form action="app/login.php" method="POST">
            <h2>Realize o login para entrar na plataforma!</h2><br>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Digite seu email aqui..."><br>
            <label for="email">Senha:</label>
            <input type="password" name="senha" placeholder="Digite sua senha aqui..."><br>
            <input type="submit" value="Entrar">
        </form>
    </section>
    <section class="sec-cadastro">
        <form action="cadastro.php">
            <h2 class="text-center">Ainda não possui uma conta?</h2>
            <input type="submit" value="Cadastrar-se">
        </form>
    </section>
</body>
</html>

