<?php
require '../db_conn.php';
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $stmt = $conn->prepare('SELECT * from users where email = (:email)');
    $stmt->execute([
        ':email' => $email
    ]);
    $result = $stmt->fetchAll();
    if ($result[0]['senha'] == $senha) {
        session_start();
        $_SESSION['id'] = $result[0]['id'];
        $_SESSION['email'] = $result[0]['email'];
        $_SESSION['username'] = $result[0]['username'];
        header('Location: ../home.php');
    } else {
        header('Location: ../index.php');
    }
}
