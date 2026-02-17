<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about/group.css">
    <title>Команда компьютерного клуба</title>
</head>
<body>
    <header>
        <div>
            <h1>Команда компьютерного клуба</h1>
            <p>Люди, которые делают наш клуб лучшим местом для геймеров</p>
        </div>
        <a href="../index.php" class="home-link">
            <button class="home-btn">На главную</button>
        </a>
    </header>

    <div class="container">
        <section>
            <h2>Наши специалисты</h2>
            <p>Наш компьютерный клуб — это не только современное оборудование, но и команда профессионалов, которые создают комфортную атмосферу и решают любые технические вопросы. Познакомьтесь с теми, кто стоит за созданием нашего клуба!</p>
        </section>

        <section>
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-photo" style="background-color: #2a4060;"></div>
                    <div class="member-info">
                        <h3 class="member-name">Александр Волков</h3>
                        <span class="member-role">Управляющий клуба</span>
                        <p>Опыт работы в индустрии развлечений — 8 лет. Отвечает за стратегическое развитие клуба и взаимодействие с партнёрами.</p>
                    </div>
                </div>
                <div class="team-member">
                    <div class="member-photo" style="background-color: #402a60;"></div>
                    <div class="member-info">
                        <h3 class="member-name">Артем Темный</h3>
                        <span class="member-role">Технический директор</span>
                        <p>Эксперт по сборке и настройке игровых ПК. Обеспечивает бесперебойную работу всех систем клуба.</p>
                    </div>
                </div>
                <div class="team-member">
                    <div class="member-photo" style="background-color: #602a40;"></div>
                    <div class="member-info">
                        <h3 class="member-name">Дмитрий Сергеев</h3>
                        <span class="member-role">Организатор турниров</span>
                        <p>Бывший киберспортсмен, проводит регулярные турниры и чемпионаты. Знает все тонкости соревновательных игр.</p>
                    </div>
                </div>
                <div class="team-member">
                    <div class="member-photo" style="background-color: #2a6040;"></div>
                    <div class="member-info">
                        <h3 class="member-name">Анна Козлова</h3>
                        <span class="member-role">Менеджер по работе с клиентами</span>
                        <p>Всегда готова помочь с бронированием, ответить на вопросы и учесть ваши пожелания.</p>
                    </div>
                </div>
                <div class="team-member">
                    <div class="member-photo" style="background-color: #50502a;"></div>
                    <div class="member-info">
                        <h3 class="member-name">Елена Смирнова</h3>
                        <span class="member-role">Системный администратор</span>
                        <p>Отвечает за стабильность сети, обновление игр и быстрое решение технических проблем.</p>
                    </div>
                </div>
                <div class="team-member">
                    <div class="member-photo" style="background-color: #2a5060;"></div>
                    <div class="member-info">
                        <h3 class="member-name">Кирилл Петров</h3>
                        <span class="member-role">Бармен и координатор лаунж‑зоны</span>
                        <p>Готовит вкусные напитки и следит за комфортом в зоне отдыха. Знает лучшие рецепты энергетических коктейлей!</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2>Наша философия</h2>
            <p>Мы верим, что успех любого проекта зависит от людей, которые в нём работают. Каждый сотрудник — не просто специалист, а настоящий энтузиаст, влюблённый в игры и технологии.</p>
        </section>
    </div>

    <footer>
        <p>© 2026 Компьютерный клуб.</p>
    </footer>
</body>
</html>