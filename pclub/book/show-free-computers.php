<?php
session_start();
require_once '../config.php';
$stmt = $pdo->query("SELECT id, number FROM computers ORDER BY number");
$computers = $stmt->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
echo json_encode($computers);