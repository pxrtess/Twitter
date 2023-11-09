<?php
require '../db_conn.php';
session_start();
$tweet = $_POST['tweet'];
if (isset($_POST['tweet'])) {
    $stmt = $conn->prepare('INSERT into tweets (text, id_users)values (:text, :userid)');
    $stmt->execute([
        ':text'=>$tweet,
        ':userid'=>$_SESSION['id']
    ]);
    header('Location: ../home.php');
}
