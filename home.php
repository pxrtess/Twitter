<?php
session_start();
if (!isset($page)) {
    require 'inicial.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/padrao.css">
    <title>Home</title>
</head>

<body>
    <header>
        <nav>
            <div class="div-logo">
                <img src="imgs/logo.png" width="60">
            </div>
            <h3>Twitter</h3>
        </nav>
    </header>
    <section class="content">
        <section class="content-left">
            <button>Pagina Inicial</button>
            <button>Explorar</button>
            <button>Notificações</button>
            <button>Mensagens</button>
            <button>Listas</button>
            <button href="app/perfil.php">Perfil</button>
            <h3><?php echo ($_SESSION['username']) ?></h3>
        </section>
        <section class="content-middle">
            <?php
            echo ($page);
            ?>
        </section>
    </section>
</body>

</html>