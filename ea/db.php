<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ea";

$con = mysqli_connect($host, $user, $pass, $db);

$sql = "SELECT * FROM products";

$products = mysqli_query($con, $sql);