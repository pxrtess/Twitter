<?php
require "./db_conn.php";
$stmt = $conn->prepare('SELECT * from tweets order by id DESC');
$stmt->execute([
]);
$result = $stmt->fetchAll();
return $result;