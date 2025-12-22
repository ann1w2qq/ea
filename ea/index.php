<?php
session_start();
?>
<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        h1 {
            margin-bottom: 20px;
        }
        
        form {
            margin-bottom: 20px;
            padding: 10px;
            background: #f5f5f5;
            border-radius: 5px;
        }
        
        select, button {
            padding: 8px 12px;
            margin-right: 10px;
            font-size: 16px;
        }
        
        button {
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        button:hover {
            background: #0056b3;
        }
        
        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .product-item {
            width: 200px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        
        .product-item h3 {
            margin-bottom: 10px;
        }
        
        .product-item p {
            margin-bottom: 5px;
            color: #555;
        }
        
        .product-item .price {
            color: #e44d26;
            font-weight: bold;
            font-size: 18px;
            margin: 10px 0;
        }
        
        .product-item a {
            display: inline-block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        
        .product-item a:hover {
            text-decoration: underline;
        }
        
        .no-products {
            padding: 20px;
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<?php
print_r($_SESSION);
?>  
    <?php require('db.php'); ?>
    <div class="container">
        <h1>Каталог товаров</h1>
        
        <form method="get">
            <label>Категория:</label>
            <select name="category">
                <option value="">Все</option>
            </select>
            
            <label>Сортировка:</label>
            <select name="sort">
                <option value="">По умолчанию</option>
                <option value="price_asc" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'price_asc') ? 'selected' : ''; ?>>По возрастанию цены</option>
                <option value="price_desc" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'price_desc') ? 'selected' : ''; ?>>По убыванию цены</option>
            </select>
            
            <button type="submit">Применить</button>
        </form>
        
        <div class="product-list">
            <?php
            // Вывод товаров
            if (isset($products) && mysqli_num_rows($products) > 0) { ?>
                <?php foreach ($products as $product): ?>
                   
                    <div class='product-item'>
                        <img src="<?= $product['image'] ?? 'none' ?>" alt="<?= $product['product_name'] ?>">
                        <h3><?= $product['product_name'] ?></h3>
                        <p><?= $product['description'] ?></p>
                        <div class='price'><?= $product['price'] ?> руб.</div>
                        <a href='product.php?id=<?= $product['id']?>'>Подробнее</a>
                        <a href='add_to_cart.php?id=<?= $product['id'] ?>'>В корзину</a>
                    </div>
                <? endforeach ?>
            <? } else {
                echo "<div class='no-products'>Нет доступных товаров.</div>";
            } 
            ?>
        </div>
    </div>
</body>
</html>