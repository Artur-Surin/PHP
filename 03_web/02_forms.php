<?php
/*
 * РІВЕНЬ 3, УРОК 2: Обробка Форм (POST запити)
 * 
 * Найчастіше веб-сайти збирають дані через форми (реєстрація, вхід, коментарі).
 * Для цього використовується метод POST, адже він безпечніший для передачі паролів,
 * ніж GET (дані не видно в URL).
 */

// Змінна для виводу результату
$result = "";

// 1. ПЕРЕВІРКА ВІДПРАВКИ ФОРМИ
// Ми перевіряємо, чи прийшли дані методом POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 2. ОТРИМАННЯ ДАНИХ
    // Дані знаходяться в масиві $_POST['name_of_input']
    $name = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    // 3. ВАЛІДАЦІЯ (Перевірка)
    if (empty($name) || empty($pass)) {
        $result = "<div class='error'>Будь ласка, заповніть всі поля!</div>";
    } else {
        // 4. БЕЗПЕКА (XSS)
        // Дуже важливо очищати дані перед виводом на екран!
        // htmlspecialchars перетворює <script>alert(1)</script> на безпечний текст.
        $safeName = htmlspecialchars($name);

        $result = "<div class='success'>Привіт, <strong>$safeName</strong>! Ваші дані отримано.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Робота з формами</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
            background: #f4f4f9;
        }

        .form-container {
            background: white;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            display: block;
            width: 90%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: #2980b9;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .success {
            color: green;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <h1>Обробка форм (POST)</h1>

    <!-- Вивід результату -->
    <?php echo $result; ?>

    <div class="form-container">
        <!-- 
            action="" означає, що дані полетять на цю ж сторінку.
            method="POST" означає, що дані будуть сховані в тілі запиту.
        -->
        <form action="" method="POST">
            <label>Логін:</label>
            <input type="text" name="username" placeholder="Введіть ім'я">

            <label>Пароль:</label>
            <input type="password" name="password" placeholder="Введіть пароль">

            <button type="submit">Увійти</button>
        </form>
    </div>

</body>

</html>