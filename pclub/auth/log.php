<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход и Регистрация</title>
    <link rel="stylesheet" href="../css/auth.css">
</head>
<body>
    <a href="../index.php" class="home-link">
        <button class="home-btn">На главную</button>
    </a>

    <div class="auth-wrapper">
        <!-- Регистрация -->
        <div class="container">
            <?php
            if(isset($_GET['err'])) {
                switch ($_GET['err']) {
                    case 'empty_fields':
                        echo '<p class="alert alert-danger">Заполнены не все поля!</p>';
                        break;
                    case 'user_exists':
                        echo '<p class="alert alert-danger">Такой пользователь уже существует.</p>';
                        break;
                    case 'empty_login_fields':
                        echo '<p class="alert alert-danger">Необходимо заполнить оба поля.</p>';
                        break;
                    case 'invalid_credentials':
                        echo '<p class="alert alert-danger">Неправильное имя пользователя или пароль.</p>';
                        break;
                }
            }
            ?>
            <h1>Регистрация</h1>
            <form action="register.php" method="POST">
                <input type="text" name="username" placeholder="Ваше имя пользователя" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>

        <!-- Авторизация -->
        <div class="container">
            <?php
            if(isset($_GET['login_success'])) {
                echo '<p class="alert alert-success">Вы успешно вошли в систему!</p>';
            }
            ?>
            <h1>Авторизация</h1>
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="Ваше имя пользователя" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <button type="submit">Войти</button>
            </form>
        </div>
    </div>
</body>
</html>