-- Таблица products (товары)
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(50) NOT NULL,
    description VARCHAR(100),
    price INT(11) NOT NULL,
    image VARCHAR(100)
);

-- Вставка тестовых данных (5 товаров)
INSERT INTO products (product_name, description, price, image) VALUES
('iPhone 14 Pro', 'Смартфон Apple, 256 ГБ, фиолетовый', 99990, 'image/iphone14.png'),
('Samsung Galaxy S23', 'Смартфон Samsung, 128 ГБ, черный', 79990, 'image/samsung23.png'),
('Футболка Nike', 'Хлопковая футболка, размер M', 2990, 'image/nike_tshirt.png'),
('Джинсы Levis', 'Классические джинсы 501, синие', 5990, 'image/levis_jeans.png'),
('Кружка керамическая', 'Белая кружка, 350 мл, для чая/кофе', 790, 'image/mug.png');