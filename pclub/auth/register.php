<?php
session_start();
require_once 'config.php';

$data = $_POST;

if(empty($data['username']) || empty($data['email']) || empty($data['password'])) {
    header('Location: index.php?err=empty_fields');
    exit();
}
$stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username=? OR email=?");
$stmt->execute([$data['username'], $data['email']]);
$result = $stmt->fetchColumn();

if($result > 0) {
    header('Location: ../index.php');
    exit();
}
$hash = password_hash($data['password'], PASSWORD_BCRYPT);

$stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
$stmt->execute([$data['username'], $data['email'], $hash]);

header('Location: ../index.php');
exit();