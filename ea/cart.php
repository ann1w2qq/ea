<?php
include 'db.php';
session_start();

$total_price = 0;

$cart_items =[];?>
<div class="cartt">
<?php foreach ($_SESSION ['cart'] as $cart_item)  :?>
<?php
    $product_id = $cart_item['product_id'];
    $sql = "SELECT * FROM `products` WHERE `id` = '$product_id'";
    $result = mysqli_query($con,$sql);

    if (mysqli_num_rows($result) >0 ) {
        $product = mysqli_fetch_assoc($result);
        $product['quantity'] = $cart_item ['quantity'];
        $product['total_price'] = $product['price'] * $cart_item['quantity'];
        $total_price += $product['total_price'];
        $cart_items[] = $product;
}
    ?>
    <div class ="carttt">
        <img src=" <?=$product['image']?>" alt="<?=$product['name']?>">
        <div class="name"><?=$product['product_name']?></div>
        <div class="price"><?=$product['price']?>$</div>
        <div class="quantity"><?=$cart_item['quantity']?> количество </div>
    </div>
      <?php endforeach; ?>
    <div class = "totalprice"> итого: <?=$total_price?>$</div>
</div>
