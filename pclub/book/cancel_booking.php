<?php
session_start();
require_once '../config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/log.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['booking_id'])) {
    die('Неверный запрос.');
}

$booking_id = intval($_POST['booking_id']);
$user_id = $_SESSION['user_id'];

// Проверяем, принадлежит ли бронь текущему пользователю
$stmt = $pdo->prepare("SELECT * FROM bookings WHERE booking_id = ? AND user_id = ?");
$stmt->execute([$booking_id, $user_id]);
$booking = $stmt->fetch();

if (!$booking) {
    die('Бронь не найдена или у вас нет прав на её отмену.');
}

// Удаляем бронь
$stmt = $pdo->prepare("DELETE FROM bookings WHERE booking_id = ?");
$stmt->execute([$booking_id]);

// Перенаправляем обратно в личный кабинет
header("Location: ../lb/kabinet.php");
exit;