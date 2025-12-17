<?php
/*
 * РІВЕНЬ 3, УРОК 1: Суперглобальні масиви
 * 
 * Суперглобальні масиви - це вбудовані змінні, які доступні в будь-якому місці коду.
 * Вони починаються з $_ і містять інформацію про сервер, запит та користувача.
 */

// --- 1. $_SERVER ---
// Містить інформацію про шляхи, скрипти та сервер.
echo "<h3>Інформація про сервер:</h3>";
echo "Ваш файл: " . $_SERVER['PHP_SELF'] . "<br>";
echo "Метод запиту: " . $_SERVER['REQUEST_METHOD'] . "<br>"; // GET або POST
echo "Ваш браузер: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

echo "<hr>";


// --- 2. $_GET ---
// Використовується для передачі даних через URL адресу.
// Приклад: script.php?name=Ivan&age=25
// Дані видно в адресному рядку!

// Щоб протестувати цей код, спробуйте додати до URL: ?name=Ivan&color=red

echo "<h3>Дані з URL (Get параметр):</h3>";

// Перевіряємо, чи є параметр 'name' в адресі
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']); // Захист від XSS
    echo "Привіт, $name!<br>";
} else {
    echo "Параметр name не передано. <a href='?name=Student'>Натисніть тут</a><br>";
}

// Отримаємо колір
$color = $_GET['color'] ?? 'black'; // Якщо немає color, беремо black
echo "Вибраний колір: <span style='color:$color'>$color</span>";

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Суперглобальні масиви</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
    </style>
</head>

<body>
    <br><br>
    <p>Спробуйте змінити URL зверху, додавши <code>?name=Вася&color=blue</code></p>
</body>

</html>