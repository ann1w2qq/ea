<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about/bt.css">
    <title>Базовый тариф — Компьютерный клуб</title>
</head>
<body>
    <header>
        <div>
            <h1>Базовый тариф «Стандарт»</h1>
            <p>Оптимальный вариант для тех, кто хочет погрузиться в игровой процесс без переплат</p>
        </div>
        <a href="../index.php" class="home-link">
            <button class="home-btn">На главную</button>
        </a>
    </header>

    <div class="container">
        <section>
            <h2>Что входит в тариф?</h2>
            <div class="price-card">
                <div class="price">120 ₽ / час</div>
                <p>Доступ к игровым станциям с:</p>
                <ul>
                    <li>Мощными ПК на базе Intel Core i5 и NVIDIA RTX 3060</li>
                    <li>Мониторами 24" 144 Гц</li>
                    <li>Полноразмерными игровыми гарнитурами</li>
                    <li>Механическими клавиатурами и игровыми мышками</li>
                    <li>Высокоскоростным интернетом (1 Гбит/с)</li>
                    <li>Доступом ко всем предустановленным играм (Steam, Epic Games)</li>
                    <li>Технической поддержкой 24/7</li>
                </ul>
                <a href="../book/booking.php" class="btn">Забронировать место</a>
            </div>
        </section>

        <section>
            <h2>Особенности тарифа</h2>
            <ul>
                <li><span class="highlight">Гибкое время использования</span> — можно брать от 1 часа без обязательств</li>
                <li><span class="highlight">Без депозита</span> — оплата по факту использования</li>
                <li><span class="highlight">Приоритетная очередь</span> на свободные ПК</li>
                <li><span class="highlight">Скидки для постоянных клиентов</span> после 10 часов игры</li>
                <li><span class="highlight">Бесплатный Wi‑Fi</span> и доступ к медиацентру</li>
                <li><span class="highlight">Кофе и вода</span> в подарок при заказе от 3 часов</li>
            </ul>
        </section>

        <section>
            <h2>Время действия тарифа</h2>
            <p>Тариф действует <span class="highlight">круглосуточно</span> без выходных.</p>
            <p>В часы низкой загрузки (будни 09:00–13:00) действует скидка 20 % — всего 96 ₽/час.</p>
        </section>

        <section>
            <h2>Как начать играть?</h2>
            <ol>
                <li>Приходите в клуб или бронируйте место онлайн</li>
                <li>Регистрируйтесь у администратора или в системе самообслуживания</li>
                <li>Выбирайте свободный ПК из доступных под тариф «Стандарт»</li>
                <li>Оплачивайте нужное количество часов (можно пополнять в процессе)</li>
                <li>Начинайте игру — всё оборудование уже настроено!</li>
            </ol>
        </section>

        <section id="booking">
            <h2>Бронирование места</h2>
            <p>Вы можете забронировать место заранее:</p>
            <ul>
                <li>По телефону: +79999999999</li>
            </ul>
            <p><span class="highlight">Совет:</span> в выходные и вечерние часы рекомендуем бронировать за 2–3 часа до визита.</p>
        </section>
    </div>

    <footer>
        <p>© 2026 Компьютерный клуб</p>
    </footer>
</body>
</html>