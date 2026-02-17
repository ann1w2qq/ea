<?php 
session_start(); 
require_once '../config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/log.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бронирование компьютеров</title>
    <link rel="stylesheet" href="../css/bo.css">
    <script src="../script.js" defer></script>
</head>
<body>



    <div class="container">
        <h1>Бронирование компьютера</h1>

        <div class="booking-controls">
            <label>Дата начала: <input type="date" id="start_date" required></label>
            <label>Время начала: <input type="time" id="start_time" required></label>
            <label>Длительность (часов): <input type="number" id="duration" min="1" value="1" required></label>
        </div>

        <h2>Доступные компьютеры</h2>
        <ul id="free-computers-list"></ul>

        <form id="book-form" method="POST">
            <input type="hidden" name="computer_id" id="computer_id" value="">
            <input type="hidden" name="start_date" id="hidden_start_date">
            <input type="hidden" name="start_time" id="hidden_start_time">
            <input type="hidden" name="duration" id="hidden_duration">
            <button type="submit" id="submit-btn">Забронировать выбранный компьютер</button>
        </form>
    </div>
</body>
</html>