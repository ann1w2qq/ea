<?php
session_start();
if (isset($_GET['id'])){
    $product_id = $_GET['id'];
if (empty($_SESSION['cart'])){
    $_SESSION['cart']=[];
}
if (isset($_SESSION['cart'][$product_id])){
    $_SESSION['cart'][$product_id]['quantity'] += 1;
} else{
    $_SESSION['cart'][$product_id]=[
        'quantity' => 1,
        'product_id' => $product_id
    ];
}
$url = $_SERVER["HTTP_REFERER"];
header("Location: $url");
}
?>