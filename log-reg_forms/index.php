<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "style.css" >
</head>
<body>
<div class="container">
        <div class="form-container" id="register-container">
            <form action = "register.php" id="register-form" method="POST">
                <h2 style="text-align: center;">Регистрация</h2>
                <input type="text" placeholder="Имя пользователя" name="username" required>
                <input type="password" placeholder="Пароль" name="pass" required>
                <input type="password" placeholder="Пароль" name="repeatpassword" required>
                <input type="text" placeholder="Email" name="email" required>
                <button type="submit">Зарегистрироваться</button>
                <p>Уже есть аккаунт? <a href="#" id="link-login">Войти</a></p>
            </form>
        </div>
        <div class="form-container" id="login-container">
            <form action ="login.php" id="login-form" method="POST">
                <h2 style="text-align: center;">Авторизация</h2>
                <input type="text" placeholder="Имя пользователя" name="username" required>
                <input type="password" placeholder="Пароль" name="password" required>
                <button type="submit">Войти</button>
                <p>Нет аккаунта? <a href="#" id="link-register">Зарегистрироваться</a></p>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>