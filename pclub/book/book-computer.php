<?php
session_start();
require_once '../config.php';

if (!isset($_SESSION['user_id'])) {
    die('Необходимо авторизоваться.');
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Метод не поддерживается.');
}

$computer_id = intval($_POST['computer_id']);
$user_id = $_SESSION['user_id'];
$start_date = $_POST['start_date'];
$start_time = $_POST['start_time'];
$duration = intval($_POST['duration']);

// Проверка заполнения
if (!$computer_id || !$start_date || !$start_time || !$duration) {
    die('Заполните все поля.');
}

// Формируем start_time
$start = $start_date . ' ' . $start_time . ':00';
$end = date('Y-m-d H:i:s', strtotime($start . ' + ' . $duration . ' hours'));

// Проверяем, что дата не в прошлом
if (strtotime($start) < time()) {
    die('Нельзя забронировать время в прошлом.');
}

// Проверяем пересечения
$stmt = $pdo->prepare("SELECT COUNT(*) FROM bookings WHERE computer_id = ? AND (
    (start_time < ? AND end_time > ?)  -- существующая бронь начинается до end и заканчивается после start
    OR (start_time >= ? AND start_time < ?) -- существующая бронь начинается внутри интервала
)");
$stmt->execute([$computer_id, $end, $start, $start, $end]);
$count = $stmt->fetchColumn();

if ($count > 0) {
    die('Этот компьютер уже занят в выбранное время.');
}

// Вставляем новую бронь
$stmt = $pdo->prepare("INSERT INTO bookings (computer_id, user_id, start_time, end_time) VALUES (?, ?, ?, ?)");
$success = $stmt->execute([$computer_id, $user_id, $start, $end]);

if ($success) {
    echo "Компьютер успешно забронирован!";
} else {
    echo "Ошибка при бронировании.";
}