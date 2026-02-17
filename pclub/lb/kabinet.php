<?php
session_start();
require_once '../config.php';
if (!isset($_SESSION['user_id'])){
    header("Location: ../auth/log.php");
    exit;
}
$user_id=$_SESSION['user_id'];
$stmt=$pdo->prepare("SELECT * FROM `bookings` WHERE user_id = ? ORDER BY start_time DESC");
$stmt->execute([$user_id]);
$books = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>профиль</title>
    <link rel="stylesheet" href="../css/lb.css">
</head>
<body>
    <a href="../index.php"><button>главная</button></a>
    
    <div class="cont">
    <h1>добро пожаловать, <?=htmlspecialchars($_SESSION['username'])?>!</h1>
    <h3>ваши бронирования:</h3>
    <?php if ($books):?>
        <table border="1">
            <tr>
                <th>id</th>
                <th>номер компьютера</th>
                <th>время начала</th>
                <th>время конца</th>
                <th>действия</th>
            </tr>
            <?php foreach($books as $book): ?>
                <tr>
                    <td><?=htmlspecialchars($book['booking_id']) ?></td>
                    <td><?=htmlspecialchars($book['computer_id']) ?></td>
                    <td><?=htmlspecialchars($book['start_time']) ?></td>
                    <td><?=htmlspecialchars($book['end_time']) ?></td>
                    <td>
                        <form method="POST" action="../book/cancel_booking.php" onsubmit="return confirm('Отменить бронь?');">
                        <input type="hidden" name="booking_id" value="<?= $book['booking_id'] ?>">
                        <button type="submit" class="cancel-btn">Отменить</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>у вас нет бронирований.</p>
    <?php endif ?>
</div>
</body>
</html>
