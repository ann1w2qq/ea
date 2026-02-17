<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Компьютерный клуб</title>
    <link rel="stylesheet" href="css/pc.css">
</head>
<header>
  <div class="header-contacts">
    <div class="logo">
    <a href="#"><img src="image/logo.jpg" alt="логотип"></a>
</div>
<div class="contact-info">
    <div class="phone-numbers">
        <span>+79999999999</span>
        <span>+79276801758</span>
    </div>
    <div class="email-column">
        <span>pcclub@games.ru</span>
    </div>
</div>
<div class="login-column">
    <?php 
       if (isset($_SESSION['username']) && $_SESSION['username'] != ""): ?>
            <a href='auth/exit.php'><button class='login-btn'>Выход</button></a>
            <a href='lb/kabinet.php'><button class='login-btn'>Профиль</button></a>
    <?php else: ?>
            <a href='auth/log.php'><button class='login-btn'>Вход</button></a>
    <?php endif; ?>
</div>
  </div>
</header>
        <nav id="nav-menu">
          <ul class="nav">
            <li>
                <a href="#">О нас</a>
                <ul class="submenu">
                    <li><a href="about/histori.php">История</a></li>
                    <li><a href="about/group.php">Команда</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Тарифы</a>
                <ul class="submenu">
                    <li><a href="about/bt.php">Базовый тариф</a></li>
                    <li><a href="about/pr.php">Премиум тариф</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Бронирование</a>
                <ul class="submenu">
                    <li><a href="book/booking.php">Онлайн бронирование</a></li>
                </ul>
            </li>
        </ul>  
    </nav>
    
<body>
    <div class="slider">
        <img class ="slide" src="image/slider1.jpg">
        <img class ="slide" src="image/slider2.jpg">
        <img class ="slide" src="image/slider3.jpg">
        <button class = "lev">←</button>
        <button class = "prav">→</button>
    </div>
    <section class = "services">
        <h class = "h">Услуги</h>
    <div class="service-grid">
    <div class="card">
        <img src="image/arenda.jpg" alt="Аренда мест">
        <div class="service">Аренда игровых мест</div>
    </div>
    <div class="card">
        <img src="image/oborud.jpg" alt="Оборудование">
        <div class="service">Эргономичное оборудование</div>
    </div>
    <div class="card">
        <img src="image/lau.png" alt="Зоны отдыха">
        <div class="service">Дополнительные зоны отдыха</div>
    </div>
    <div class="card">
        <img src="image/tur.jpg" alt="Организация турниров и мероприятий">
        <div class="service">Организация турниров и мероприятий</div>
    </div>
    <div class="card">
        <img src="image/eda.jpg" alt="Услуги питания">
        <div class="service">Услуги питания</div>
    </div>
    <div class="card">
        <img src="image/arend.jpg" alt="Аренда помещений">
        <div class="service">Аренда помещений</div>
    </div>
    
</div>
</section>

<section class="why-me">
        <h class ="h">Почему мы?</h>
    <div class="why-grid">
    <div class="card">
        <img class="why" src="image/1.jpg" alt="крутой комп">
        <div>Высокопроизводительные компьютеры</div>
    </div>
    <div class="card">
        <img class="why" src="image/2.jpg" alt="комфорт">
        <div>Комфортные условия</div>
    </div>
    <div class="card">
        <img class="why" src="image/3.jpg" alt="комфорт">
        <div>Быстрое подключение к Интернету</div>
    </div>
    <div class="card">
        <img class="why" src="image/4.jpg" alt="комфорт">
        <div>Широкий спектр услуг</div>
    </div>
    <div class="card">
        <img class="why" src="image/5.jpg" alt="комфорт">
        <div>Дружелюбное сообщество</div>
    </div>
    <div class="card">
        <img class="why" src="image/6.jpg" alt="комфорт">
        <div>Индивидуальные скидки и акции</div>
    </div>    
</div>
</section>

<section class="rabotniki">
        <h class = "h">Рабочий состав</h>
        <div class="rab-grid">
    <div class="card">
        <img class="raba" src="image/admin.jpg" alt="Администратор">
        <div>Администратор</div>
    </div>

    <div class="card">
        <img class="raba" src="image/tehno.jpg" alt="Технический специалист">
        <div>Технический специалист</div>
    </div>
    <div class="card">
        <img class="raba" src="image/man.jpg" alt="Менеджер по киберспорту">
        <div>Менеджер по киберспорту</div>
    </div>

    <div class="card">
        <img class="raba" src="image/barmen.jpg" alt="Бармен/бариста">
        <div>Бармен/бариста</div>
    </div>
        </div>
</section>
    <footer>
        <div class="footer">
            <div class="logo"><img src="image/logo.jpg" alt="логотип"></div>
            <div>
            <ul>
                <li>🖥️</li>
                <li>🖥️</li>
                <li>🖥️</li>
                <li>🖥️</li>
            </ul>
            </div>
            <div>
            <div class="fot">+79999999999</div>
            <div class="fot">+79276801758</div>
            <div class="fot">pcclub@games.ru</div>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>

