<?php
require "../db_conn.php";
if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['senha2']) && isset($_POST['username'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];
    $username = $_POST['username'];
    $stmt = $conn->prepare('SELECT * from users where username = (:username)');
    $stmt->execute([
        ':username' => $username
    ]);
    $result = $stmt->fetchAll();
    if (!isset($result[0])) {
        if ($senha != $senha2) {
            $mensagem = "Por favor, digite senhas iguais.";
            header('Location: ../cadastro.php?mensagem=' . urldecode($mensagem));
        } else {
            $stmt = $conn->prepare('INSERT INTO users (email, senha, username) VALUES (:email, :senha, :username)');
            $stmt->execute([
                ':email' => $email,
                ':senha' => $senha,
                ':username' => $username
            ]);
            $mensagem = "Cadastro realizado com sucesso.";
            header('Location: /index.php?mensagem=' . urldecode($mensagem));
        }
    } else {
        $mensagem = 'Nome de usuário já cadastrado!';
        header('Location: ../cadastro.php?mensagem=' . urldecode($mensagem));
    }
}
