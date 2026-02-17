<?php
session_start();
require_once '../config.php'; 

$data = $_POST;
if(empty($data['username']) || empty($data['password'])) {
    header('Location: ../index.php');
    exit();
}
$stmt = $pdo->prepare("SELECT * FROM users WHERE username=?");
$stmt->execute([$data['username']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$user || !password_verify($data['password'], $user['password_hash'])) {
    header('Location: ../index.php');
    exit();
}

$_SESSION['user_id'] = $user['user_id'];
$_SESSION['username'] = $user['username'];

header('Location: ../index.php');
exit();