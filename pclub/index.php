<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Компьютерный клуб</title>
    <link rel="stylesheet" href="pc.css">
</head>
<header>
  <div class="header-contacts">
    <div class="logo">
        <a href="#"><img src="image/logo.jpg" alt="логотип"></a>
    </div>
    <div class="phone-column">
      <div class="contact-item">+79999999999</div>
      <div class="contact-item">+79276801758</div>
    </div>
    <div class="email-column">
      <div class="contact-item">pcclub@games.ru</div>
    </div>
    <div class="login-column">
      <button class="login-btn">Войти</button>
    </div>
  </div>
</header>
        <nav id="nav-menu">
          <ul class="nav">
            <li>
                <a href="#">Главная</a>
                <ul class="submenu">
                    <li><a href="#">Подраздел 1</a></li>
                    <li><a href="#">Подраздел 2</a></li>
                    <li><a href="#">Подраздел 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#">О нас</a>
                <ul class="submenu">
                    <li><a href="#">История</a></li>
                    <li><a href="#">Команда</a></li>
                    <li><a href="#">Награды</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Тарифы</a>
                <ul class="submenu">
                    <li><a href="#">Базовый тариф</a></li>
                    <li><a href="#">Премиум тариф</a></li>
                    <li><a href="#">Корпоративный тариф</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Бронирование</a>
                <ul class="submenu">
                    <li><a href="#">Онлайн бронирование</a></li>
                    <li><a href="#">Правила бронирования</a></li>
                    <li><a href="#">Отмена бронирования</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Контакты</a>
                <ul class="submenu">
                    <li><a href="#">Адрес офиса</a></li>
                    <li><a href="#">Телефон</a></li>
                    <li><a href="#">Электронная почта</a></li>
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
        <div class = "h">Услуги</div>
    <div class="service-grid">
            <img class ="usluga" src="image/arenda.jpg">
            <img class ="usluga" src="image/oborud.jpg">  
            <img class ="usluga" src="image/lau.png">
        <div class="service">Аренда игровых мест</div>   
        <div class="service">Эргономичное оборудование</div>    
        <div class="service">Дополнительные зоны отдыха</div>
            <img class ="usluga" src="image/tur.jpg">
            <img class ="usluga" src="image/eda.jpg">
            <img class ="usluga" src="image/arend.jpg">
        <div class="service">Организация турниров и мероприятий</div>   
        <div class="service">Услуги питания</div>    
        <div class="service">Аренда помещений</div>
    </div>
    </section>
    <section class="why-me">
        <h class ="h">Почему мы?</h>
    <div class="why-grid">
            <img class="why" src="image/1.jpg" alt="крутой комп"></a>
            <img class="why" src="image/2.jpg" alt="комфорт"></a>
            <img class="why" src="image/3.jpg" alt="интернет"></a>
            <div>Высокопроизводительные компьютеры</div>
            <div>Комфортные условия</div>
            <div>Быстрое подключение к Интернету</div>
            <img class="why" src="image/4.jpg" alt="широко"></a>
            <img class="why" src="image/5.jpg" alt="друзьяшки"></a>
            <img class="why" src="image/6.jpg" alt="крута"></a>
            <div>Широкий спектр услуг</div>
            <div>Дружелюбное сообщество</div>
            <div>Индивидуальные скидки и акции</div>
    </div>
    </section>
    <section class="rabotniki">
        <h class = "h">Рабочий состав</h>
        <div class="rab-grid">
                <img class="raba" src="image/admin.jpg">
                <img class="raba" src="image/tehno.jpg">
                <img class="raba" src="image/man.jpg">
                <img class="raba" src="image/barmen.jpg">
                <div>Администратор</div>
                <div>Технический специалист</div>
               <div>Менеджер по киберспорту</div>
               <div>Бармен/бариста</div>
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

