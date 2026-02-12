<?php

try{

    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=pclub;charset=utf8mb4',
        'root',
        ''
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
        );

        echo "Подключение успешно";
} catch (PDOException $e) {
    die ("Ошибка подключение: " . $e->getMessage())
}