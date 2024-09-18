<?php
include 'db.php';

$stmt = $pdo->query('SELECT * FROM users');
$users = $stmt->fetchAll();
?>
