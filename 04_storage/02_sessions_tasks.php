<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: СЕСІЇ (Рівень 4)
 * --------------------------------------------------------------------------
 */

// 1. Стартуйте сесію (пам'ятайте, це має бути перший рядок)
// TODO: session_start();

$error = "";

// 2. Обробка форми входу
// Якщо форма відправлена (POST):
//    - Отримайте пароль.
//    - Якщо пароль === "secret123" -> запишіть в сесію ['auth'] = true;
//    - Інакше -> $error = "Невірний пароль!";

// TODO: Ваш код обробки форми тут


// 3. Обробка виходу (Logout)
// Якщо в URL є ?logout=1 -> знищіть сесію і перезавантажте сторінку.

// TODO: Ваш код виходу тут

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Практика: Вхід на сайт</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 40px;
            background: #eceff1;
        }

        .login-box {
            background: white;
            padding: 30px;
            width: 300px;
            margin: 0 auto;
            border-radius: 8px;
            text-align: center;
        }

        .secret-content {
            background: #c8e6c9;
            padding: 30px;
            text-align: center;
            border-radius: 8px;
            border: 2px solid #43a047;
        }

        input {
            padding: 8px;
            width: 80%;
            margin: 10px 0;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

    <!-- 4. ЛОГІКА ВІДОБРАЖЕННЯ -->
    <!-- Якщо користувач авторизований (в сесії є 'auth') -> покажіть .secret-content і кнопку Вихід -->
    <!-- Інакше -> покажіть .login-box з формою входу -->

    <?php if (false): // ЗАМІНІТЬ false НА ПЕРЕВІРКУ СЕСІЇ ?>

        <div class="secret-content">
            <h1>🔓 Секретна інформація</h1>
            <p>Вітаємо! Ви отримали доступ до закритої частини сайту.</p>
            <p>Пароль був: secret123</p>
            <br>
            <a href="?logout=1"><button>Вийти</button></a>
        </div>

    <?php else: ?>

        <div class="login-box">
            <h1>🔐 Вхід</h1>
            <?php if ($error): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>

            <form method="POST">
                <input type="password" name="password" placeholder="Введіть пароль" required>
                <br>
                <button type="submit">Увійти</button>
            </form>
            <p style="color:#aaa; font-size: 0.8em;">(Підказка: пароль secret123)</p>
        </div>

    <?php endif; ?>

</body>

</html>