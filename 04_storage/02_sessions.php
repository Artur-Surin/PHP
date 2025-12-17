<?php
/*
 * РІВЕНЬ 4, УРОК 2: Сесії та Куки (Sessions & Cookies)
 * 
 * HTTP - це протокол "без станів" (stateless). Це означає, що сервер не пам'ятає вас
 * між двома різними запитами. Щоб "запам'ятати" користувача (наприклад, що він залогінився),
 * використовуються Сесії та Куки.
 */

// --- 1. СЕСІЇ ($_SESSION) ---
// Сесії зберігають дані на СЕРВЕРІ. Користувач має лише ID сесії (зазвичай в куках).
// Сесія живе, поки ви не закриєте браузер (або поки не вийде час життя).

// ВАЖЛИВО: session_start() має бути НА САМОМУ ПОЧАТКУ файлу, до будь-якого HTML виводу!
session_start();

// Логіка лічильника відвідувань
if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 1;
} else {
    $_SESSION['visits']++;
}

// --- 2. КУКИ ($_COOKIE) ---
// Куки зберігають дані в БРАУЗЕРІ користувача.
// Вони можуть жити довго (наприклад, "Запам'ятати мене" на 30 днів).

// setcookie(name, value, expire, path);
// Встановимо куку 'username' якщо вона ще не встановлена
// if (!isset($_COOKIE['username'])) {
//     setcookie('username', 'Guest', time() + (86400 * 30), "/"); // 86400 = 1 день
// }
// Примітка: setcookie теж треба викликати до виводу HTML.

// Обробка форми для зміни імені в сесії
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['my_name'])) {
    // Зберігаємо ім'я в сесію
    $_SESSION['user_name'] = htmlspecialchars($_POST['my_name']);
}

// Логаут (очищення сесії)
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset(); // Видаляє змінні сесії
    session_destroy(); // Знищує сесію
    header("Location: 03_sessions.php"); // Перезавантажуємо сторінку
    exit;
}

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Сесії та Куки</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
            background: #fff3e0;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        button {
            background: #ff9800;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background: #f57c00;
        }

        .info {
            color: #555;
        }
    </style>
</head>

<body>

    <h1>Сесії: Зберігаємо стан</h1>

    <div class="card">
        <p class="info">Ви оновили цю сторінку (за цю сесію): <strong><?php echo $_SESSION['visits']; ?></strong> разів.
        </p>

        <?php if (isset($_SESSION['user_name'])): ?>
            <h2>Привіт, <?php echo $_SESSION['user_name']; ?>!</h2>
            <p>Сервер пам'ятає ваше ім'я, навіть якщо ви оновите сторінку.</p>
            <a href="?action=logout"><button>Вийти (Очистити сесію)</button></a>
        <?php else: ?>
            <form method="POST">
                <label>Як вас звати?</label><br>
                <input type="text" name="my_name" required>
                <button type="submit">Запам'ятати мене</button>
            </form>
        <?php endif; ?>
    </div>

    <div class="card">
        <h3>Примітка:</h3>
        <p>Спробуйте закрити вкладку і відкрити знову - лічильник може зберегтися (залежить від браузера).</p>
        <p>А якщо відкрити в режимі "Інкогніто" - це буде нова сесія.</p>
    </div>

</body>

</html>